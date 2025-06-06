<?php

namespace MaartenDeBlock\YukiApiClient\Fluent;

use MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\Companies;
use MaartenDeBlock\YukiApiClient\Exception\YukiApiException;

class AccountingService extends FluentServiceBase
{
    public function companies()
    {
        return new class($this->originalClient, $this->sessionManager) extends FluentServiceBase {
            public function get(): array
            {
                try {
                    $sessionId = $this->ensureAuthenticated();
                    $this->log('Fetching accounting companies', ['session_id' => $sessionId]);
                    
                    $request = new Companies($sessionId);
                    $response = $this->originalClient->companies($request);
                    $result = $response->getCompaniesResult();
                    
                    return $this->toArray($result);
                } catch (\Exception $e) {
                    $this->log('Error fetching accounting companies', ['error' => $e->getMessage()]);
                    throw new YukiApiException('Failed to fetch accounting companies: ' . $e->getMessage(), 0, $e);
                }
            }

            public function cached(int $ttl = 3600)
            {
                return $this;
            }
        };
    }

    public function transactions()
    {
        return new class($this->originalClient, $this->sessionManager) extends FluentServiceBase {
            private array $filters = [];

            public function where(string $field, $value): self
            {
                $this->filters[$field] = $value;
                return $this;
            }

            public function get(): array
            {
                try {
                    $sessionId = $this->ensureAuthenticated();
                    $this->log('Fetching transactions', [
                        'session_id' => $sessionId,
                        'filters' => $this->filters
                    ]);
                    
                    // This would be implemented based on actual WSDL methods
                    // For now, return empty array as placeholder
                    return [];
                } catch (\Exception $e) {
                    $this->log('Error fetching transactions', ['error' => $e->getMessage()]);
                    throw new YukiApiException('Failed to fetch transactions: ' . $e->getMessage(), 0, $e);
                }
            }
        };
    }
}