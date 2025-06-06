<?php

namespace MaartenDeBlock\YukiApiClient\Exception;

class YukiAuthenticationException extends YukiApiException
{
    public static function invalidCredentials(): self
    {
        return new self('Invalid API credentials provided.');
    }

    public static function sessionExpired(): self
    {
        return new self('Session has expired. Please re-authenticate.');
    }

    public static function authenticationFailed(string $reason = ''): self
    {
        $message = 'Authentication failed';
        if ($reason) {
            $message .= ': ' . $reason;
        }
        return new self($message);
    }
}