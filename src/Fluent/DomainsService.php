<?php

namespace MaartenDeBlock\YukiApiClient\Fluent;

use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Companies;
use MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\Domains;
use MaartenDeBlock\YukiApiClient\Exception\YukiApiException;

class DomainsService extends FluentServiceBase
{
    public function companies()
    {
        return new class($this->originalClient, $this->sessionManager) extends FluentServiceBase {
            public function get(): array
            {
                try {
                    $sessionId = $this->ensureAuthenticated();
                    $this->log('Fetching companies', ['session_id' => $sessionId]);
                    
                    $request = new Companies($sessionId);
                    $response = $this->originalClient->companies($request);
                    $result = $response->getCompaniesResult();
                    
                    return $this->toArray($result);
                } catch (\Exception $e) {
                    $this->log('Error fetching companies', ['error' => $e->getMessage()]);
                    throw new YukiApiException('Failed to fetch companies: ' . $e->getMessage(), 0, $e);
                }
            }

            public function cached(int $ttl = 3600)
            {
                // For now, just return self - caching implementation would go here
                return $this;
            }
        };
    }

    public function domains()
    {
        return new class($this->originalClient, $this->sessionManager) extends FluentServiceBase {
            public function get(): array
            {
                try {
                    $sessionId = $this->ensureAuthenticated();
                    $this->log('Fetching domains', ['session_id' => $sessionId]);
                    
                    $request = new Domains($sessionId);
                    $response = $this->originalClient->domains($request);
                    $result = $response->getDomainsResult();
                    
                    return $this->toArray($result);
                } catch (\Exception $e) {
                    $this->log('Error fetching domains', ['error' => $e->getMessage()]);
                    throw new YukiApiException('Failed to fetch domains: ' . $e->getMessage(), 0, $e);
                }
            }

            public function cached(int $ttl = 3600)
            {
                return $this;
            }
        };
    }
}