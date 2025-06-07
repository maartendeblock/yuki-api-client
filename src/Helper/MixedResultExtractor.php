<?php

namespace MaartenDeBlock\YukiApiClient\Helper;

/**
 * Helper class to extract actual results from MixedResult exceptions
 */
class MixedResultExtractor
{
    /**
     * Attempts to extract the actual API result from a MixedResult exception
     *
     * @param \Exception $exception
     * @return array
     */
    public static function extractFromException(\Exception $exception): array
    {
        $result = [
            'success' => false,
            'data' => null,
            'type' => 'unknown',
            'original_error' => $exception->getMessage()
        ];

        // Check if this is a MixedResult related exception
        if (strpos($exception->getMessage(), 'MixedResult') === false) {
            return $result;
        }

        $result['type'] = 'mixed_result';
        $result['success'] = true; // API call succeeded, just type mismatch

        // Try different approaches to extract the actual result
        
        // Approach 1: Check if it's a SoapException with response
        if ($exception instanceof \Phpro\SoapClient\Exception\SoapException) {
            try {
                $response = $exception->getResponse();
                if ($response && method_exists($response, 'getResult')) {
                    $result['data'] = $response->getResult();
                    $result['extraction_method'] = 'soap_exception_response';
                    return $result;
                }
            } catch (\Exception $e) {
                // Continue to next approach
            }
        }

        // Approach 2: Try to extract from exception trace
        $trace = $exception->getTrace();
        foreach ($trace as $frame) {
            if (isset($frame['args']) && is_array($frame['args'])) {
                foreach ($frame['args'] as $arg) {
                    if ($arg instanceof \Phpro\SoapClient\Type\MixedResult) {
                        $result['data'] = $arg->getResult();
                        $result['extraction_method'] = 'trace_mixed_result';
                        return $result;
                    }
                }
            }
        }

        // Approach 3: Parse exception message for useful information
        $message = $exception->getMessage();
        if (preg_match('/Expected "([^"]+)", got "([^"]+)"/', $message, $matches)) {
            $result['expected_type'] = $matches[1];
            $result['actual_type'] = $matches[2];
            $result['extraction_method'] = 'message_parsing';
        }

        return $result;
    }

    /**
     * Wraps a SOAP call and handles MixedResult exceptions
     *
     * @param callable $soapCall
     * @return array
     */
    public static function handleSoapCall(callable $soapCall): array
    {
        try {
            $result = $soapCall();
            return [
                'success' => true,
                'data' => $result,
                'type' => 'normal_response',
                'extraction_method' => 'direct_call'
            ];
        } catch (\Exception $e) {
            return self::extractFromException($e);
        }
    }

    /**
     * Analyzes the extracted data for success indicators
     *
     * @param mixed $data
     * @return array
     */
    public static function analyzeData($data): array
    {
        $analysis = [
            'data_type' => gettype($data),
            'is_string' => is_string($data),
            'is_empty' => empty($data),
            'success_indicators' => [],
            'error_indicators' => [],
            'likely_success' => false
        ];

        if (is_string($data)) {
            $analysis['string_length'] = strlen($data);
            $analysis['preview'] = substr($data, 0, 200) . (strlen($data) > 200 ? '...' : '');

            // Check for success indicators
            if (stripos($data, 'success') !== false) {
                $analysis['success_indicators'][] = 'contains_success_text';
            }
            if (preg_match('/\d{4,}/', $data)) {
                $analysis['success_indicators'][] = 'contains_numeric_id';
            }
            if (stripos($data, 'invoice') !== false) {
                $analysis['success_indicators'][] = 'contains_invoice_reference';
            }
            if (preg_match('/<[^>]+>/', $data)) {
                $analysis['success_indicators'][] = 'contains_xml_structure';
            }

            // Check for error indicators
            if (stripos($data, 'error') !== false || stripos($data, 'fault') !== false) {
                $analysis['error_indicators'][] = 'contains_error_text';
            }
            if (stripos($data, 'exception') !== false) {
                $analysis['error_indicators'][] = 'contains_exception_text';
            }
        } elseif (is_array($data)) {
            $analysis['array_keys'] = array_keys($data);
            $analysis['array_count'] = count($data);
        } elseif (is_object($data)) {
            $analysis['object_class'] = get_class($data);
            if (method_exists($data, '__toString')) {
                $stringData = (string) $data;
                $analysis['string_representation'] = substr($stringData, 0, 200);
            }
        }

        $analysis['likely_success'] = 
            !empty($analysis['success_indicators']) && 
            empty($analysis['error_indicators']) &&
            !$analysis['is_empty'];

        return $analysis;
    }
}