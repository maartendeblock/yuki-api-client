<?php

namespace MaartenDeBlock\YukiApiClient\Environment;

class YukiEnvironment
{
    public const PRODUCTION = 'production';
    public const TEST = 'test';
    public const DEVELOPMENT = 'development';

    private string $environment;
    private string $baseUrl;

    private static array $environments = [
        self::PRODUCTION => 'https://api.yukiworks.be/ws',
        self::TEST => 'https://api.yukiworks.be/ws', // Same as production for now
        self::DEVELOPMENT => 'https://api.yukiworks.be/ws',
    ];

    public function __construct(string $environment = self::PRODUCTION)
    {
        if (!isset(self::$environments[$environment])) {
            throw new \InvalidArgumentException("Unknown environment: {$environment}");
        }

        $this->environment = $environment;
        $this->baseUrl = self::$environments[$environment];
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getWsdlUrl(string $service): string
    {
        return $this->baseUrl . '/' . $service . '.asmx?WSDL';
    }

    public function isProduction(): bool
    {
        return $this->environment === self::PRODUCTION;
    }

    public function isTest(): bool
    {
        return $this->environment === self::TEST;
    }

    public function isDevelopment(): bool
    {
        return $this->environment === self::DEVELOPMENT;
    }

    public static function production(): self
    {
        return new self(self::PRODUCTION);
    }

    public static function test(): self
    {
        return new self(self::TEST);
    }

    public static function development(): self
    {
        return new self(self::DEVELOPMENT);
    }
}