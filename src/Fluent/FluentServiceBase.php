<?php

namespace MaartenDeBlock\YukiApiClient\Fluent;

use MaartenDeBlock\YukiApiClient\Session\SessionManager;
use MaartenDeBlock\YukiApiClient\Exception\YukiAuthenticationException;

abstract class FluentServiceBase
{
    protected $originalClient;
    protected SessionManager $sessionManager;
    protected bool $debugMode = false;

    public function __construct($originalClient, SessionManager $sessionManager)
    {
        $this->originalClient = $originalClient;
        $this->sessionManager = $sessionManager;
    }

    protected function ensureAuthenticated(): string
    {
        if (!$this->sessionManager->hasValidSession()) {
            throw YukiAuthenticationException::sessionExpired();
        }

        return $this->sessionManager->getSessionId();
    }

    protected function toArray($result): array
    {
        if ($result === null) {
            return [];
        }

        if (is_array($result)) {
            return $result;
        }

        if (is_object($result)) {
            return $this->objectToArray($result);
        }

        return [$result];
    }

    private function objectToArray($obj): array
    {
        if (method_exists($obj, 'toArray')) {
            return $obj->toArray();
        }

        $array = [];
        $reflection = new \ReflectionObject($obj);

        foreach ($reflection->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($obj);
            
            if (is_object($value)) {
                $value = $this->objectToArray($value);
            }
            
            $array[$property->getName()] = $value;
        }

        return $array;
    }

    public function debug(bool $enabled = true): self
    {
        $this->debugMode = $enabled;
        return $this;
    }

    protected function log(string $message, array $context = []): void
    {
        if ($this->debugMode) {
            error_log("[Yuki API] {$message} " . json_encode($context));
        }
    }
}