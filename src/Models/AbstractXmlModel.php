<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * Abstract base class for XML serializable models
 */
abstract class AbstractXmlModel implements XmlSerializableInterface
{
    /**
     * Generate XML indentation
     *
     * @param int $level Indentation level
     * @return string Indentation string
     */
    protected function indent(int $level): string
    {
        return str_repeat('    ', $level);
    }

    /**
     * Escape XML content
     *
     * @param string|null $content Content to escape
     * @return string Escaped content
     */
    protected function escapeXml(?string $content): string
    {
        if ($content === null) {
            return '';
        }
        return htmlspecialchars($content, ENT_XML1 | ENT_COMPAT, 'UTF-8');
    }

    /**
     * Format XML element with optional content
     *
     * @param string $tagName Element tag name
     * @param string|null $content Element content
     * @param int $indent Indentation level
     * @param bool $selfClosing Whether to use self-closing tag for empty content
     * @return string Formatted XML element
     */
    protected function xmlElement(string $tagName, ?string $content, int $indent = 0, bool $selfClosing = false): string
    {
        $indentStr = $this->indent($indent);
        
        if ($content === null || $content === '') {
            return $selfClosing ? "{$indentStr}<{$tagName} />" : "{$indentStr}<{$tagName}></{$tagName}>";
        }
        
        $escapedContent = $this->escapeXml($content);
        return "{$indentStr}<{$tagName}>{$escapedContent}</{$tagName}>";
    }

    /**
     * Format money amount to Yuki format (max 2 decimals)
     *
     * @param float|string|null $amount Amount to format
     * @return string Formatted amount
     */
    protected function formatMoney($amount): string
    {
        if ($amount === null || $amount === '') {
            return '0.00';
        }
        return number_format((float)$amount, 2, '.', '');
    }

    /**
     * Format percentage to Yuki format (max 2 decimals)
     *
     * @param float|string|null $percentage Percentage to format
     * @return string Formatted percentage
     */
    protected function formatPercentage($percentage): string
    {
        if ($percentage === null || $percentage === '') {
            return '0.00';
        }
        return number_format((float)$percentage, 2, '.', '');
    }

    /**
     * Format date to Yuki format (Y-m-d)
     *
     * @param \DateTime|string|null $date Date to format
     * @return string Formatted date
     */
    protected function formatDate($date): string
    {
        if ($date === null) {
            return '';
        }
        
        if ($date instanceof \DateTime) {
            return $date->format('Y-m-d');
        }
        
        if (is_string($date)) {
            $dateTime = \DateTime::createFromFormat('Y-m-d', $date);
            if ($dateTime !== false) {
                return $dateTime->format('Y-m-d');
            }
            
            // Try to parse other common formats
            $dateTime = new \DateTime($date);
            return $dateTime->format('Y-m-d');
        }
        
        return '';
    }

    /**
     * Check if a field is required and add validation error if missing
     *
     * @param mixed $value Field value
     * @param string $fieldName Field name for error message
     * @param array &$errors Reference to errors array
     * @return bool True if field is valid
     */
    protected function validateRequired($value, string $fieldName, array &$errors): bool
    {
        if ($value === null || $value === '') {
            $errors[] = "Field '{$fieldName}' is required";
            return false;
        }
        return true;
    }

    /**
     * Validate email format
     *
     * @param string|null $email Email to validate
     * @param string $fieldName Field name for error message
     * @param array &$errors Reference to errors array
     * @return bool True if email is valid
     */
    protected function validateEmail(?string $email, string $fieldName, array &$errors): bool
    {
        if ($email !== null && $email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Field '{$fieldName}' must be a valid email address";
            return false;
        }
        return true;
    }
}