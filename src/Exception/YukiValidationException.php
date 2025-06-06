<?php

namespace MaartenDeBlock\YukiApiClient\Exception;

class YukiValidationException extends YukiApiException
{
    protected array $errors = [];

    public function __construct(string $message = "", array $errors = [], int $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public static function requiredField(string $field): self
    {
        return new self("Required field '{$field}' is missing.", [$field => 'This field is required.']);
    }

    public static function invalidValue(string $field, $value, string $expected = ''): self
    {
        $message = "Invalid value for field '{$field}': " . json_encode($value);
        if ($expected) {
            $message .= ". Expected: {$expected}";
        }
        return new self($message, [$field => $message]);
    }
}