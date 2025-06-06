<?php

namespace MaartenDeBlock\YukiApiClient\Config;

use MaartenDeBlock\YukiApiClient\Environment\YukiEnvironment;

class YukiConfig
{
    private string $apiKey;
    private YukiEnvironment $environment;
    private array $options;

    public function __construct(
        string $apiKey,
        YukiEnvironment $environment = null,
        array $options = []
    ) {
        $this->apiKey = $apiKey;
        $this->environment = $environment ?? YukiEnvironment::production();
        $this->options = array_merge([
            'timeout' => 30,
            'cache_enabled' => false,
            'cache_ttl' => 3600,
            'debug' => false,
            'auto_authenticate' => true,
        ], $options);
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getEnvironment(): YukiEnvironment
    {
        return $this->environment;
    }

    public function getOption(string $key, $default = null)
    {
        return $this->options[$key] ?? $default;
    }

    public function setOption(string $key, $value): self
    {
        $this->options[$key] = $value;
        return $this;
    }

    public function isDebugEnabled(): bool
    {
        return (bool) $this->getOption('debug', false);
    }

    public function isCacheEnabled(): bool
    {
        return (bool) $this->getOption('cache_enabled', false);
    }

    public function getCacheTtl(): int
    {
        return (int) $this->getOption('cache_ttl', 3600);
    }

    public function isAutoAuthenticateEnabled(): bool
    {
        return (bool) $this->getOption('auto_authenticate', true);
    }

    public static function fromArray(array $config): self
    {
        $environment = isset($config['environment']) 
            ? new YukiEnvironment($config['environment'])
            : null;

        return new self(
            $config['api_key'] ?? '',
            $environment,
            $config['options'] ?? []
        );
    }

    public static function fromFile(string $path): self
    {
        if (!file_exists($path)) {
            throw new \InvalidArgumentException("Config file not found: {$path}");
        }

        $config = require $path;

        if (!is_array($config)) {
            throw new \InvalidArgumentException("Config file must return an array");
        }

        return self::fromArray($config);
    }
}