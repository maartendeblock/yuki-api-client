<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * Interface for models that can be serialized to XML
 */
interface XmlSerializableInterface
{
    /**
     * Convert the model to XML representation
     *
     * @param int $indent Optional indentation level for pretty printing
     * @return string XML representation of the model
     */
    public function toXml(int $indent = 0): string;

    /**
     * Validate the model data before XML serialization
     *
     * @return array Array of validation errors (empty if valid)
     */
    public function validate(): array;
}