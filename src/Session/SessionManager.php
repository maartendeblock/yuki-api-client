<?php

namespace MaartenDeBlock\YukiApiClient\Session;

use MaartenDeBlock\YukiApiClient\Exception\YukiAuthenticationException;

class SessionManager
{
    private ?string $sessionId = null;
    private ?int $expiresAt = null;
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getSessionId(): ?string
    {
        if ($this->isExpired()) {
            $this->sessionId = null;
            $this->expiresAt = null;
        }

        return $this->sessionId;
    }

    public function setSessionId(string $sessionId, int $ttl = 3600): self
    {
        $this->sessionId = $sessionId;
        $this->expiresAt = time() + $ttl;
        return $this;
    }

    public function hasValidSession(): bool
    {
        return $this->getSessionId() !== null;
    }

    public function isExpired(): bool
    {
        if ($this->expiresAt === null) {
            return true;
        }

        return time() >= $this->expiresAt;
    }

    public function invalidate(): self
    {
        $this->sessionId = null;
        $this->expiresAt = null;
        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getRemainingTime(): int
    {
        if ($this->expiresAt === null) {
            return 0;
        }

        return max(0, $this->expiresAt - time());
    }
}