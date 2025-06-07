<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * Company/Administration model for Yuki API
 */
class Company extends AbstractXmlModel
{
    private ?string $id = null;
    private ?string $name = null;
    private ?string $code = null;
    private ?bool $active = null;

    public function __construct(?string $id = null, ?string $name = null, ?string $code = null, ?bool $active = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->active = $active;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        $xml[] = $this->xmlElement('Company', null, $indent);
        
        if ($this->id !== null) {
            $xml[] = $this->xmlElement('ID', $this->id, $indent + 1);
        }
        
        if ($this->name !== null) {
            $xml[] = $this->xmlElement('Name', $this->name, $indent + 1);
        }
        
        if ($this->code !== null) {
            $xml[] = $this->xmlElement('Code', $this->code, $indent + 1);
        }
        
        if ($this->active !== null) {
            $xml[] = $this->xmlElement('Active', $this->active ? 'true' : 'false', $indent + 1);
        }
        
        $xml[] = $this->indent($indent) . '</Company>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // Company ID or Name is typically required for identification
        if (($this->id === null || $this->id === '') && ($this->name === null || $this->name === '')) {
            $errors[] = "Either Company ID or Name must be provided";
        }
        
        return $errors;
    }

    /**
     * Create Company from array data (e.g., from API response)
     *
     * @param array $data Company data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['id'] ?? $data['ID'] ?? null,
            $data['name'] ?? $data['Name'] ?? null,
            $data['code'] ?? $data['Code'] ?? null,
            isset($data['active']) ? (bool)$data['active'] : (isset($data['Active']) ? (bool)$data['Active'] : null)
        );
    }

    /**
     * Convert to array representation
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'active' => $this->active
        ];
    }
}