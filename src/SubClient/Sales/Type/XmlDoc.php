<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use MaartenDeBlock\YukiApiClient\Models\XmlSerializableInterface;

class XmlDoc
{
    /**
     * @var string|null
     */
    public $any;

    /**
     * Constructor
     *
     * @param string|XmlSerializableInterface|null $content XML content or serializable model
     */
    public function __construct($content = null)
    {
        if ($content instanceof XmlSerializableInterface) {
            $this->any = $content->toXml();
        } elseif (is_string($content)) {
            $this->any = $content;
        } else {
            $this->any = null;
        }
    }

    /**
     * Set XML content from string
     *
     * @param string $xmlContent
     * @return void
     */
    public function setXmlContent(string $xmlContent): void
    {
        $this->any = $xmlContent;
    }

    /**
     * Set content from model object
     *
     * @param XmlSerializableInterface $model
     * @return void
     */
    public function setFromModel(XmlSerializableInterface $model): void
    {
        $this->any = $model->toXml();
    }

    /**
     * Get XML content
     *
     * @return string|null
     */
    public function getXmlContent(): ?string
    {
        return $this->any;
    }

    /**
     * Create XmlDoc from model
     *
     * @param XmlSerializableInterface $model
     * @return self
     */
    public static function fromModel(XmlSerializableInterface $model): self
    {
        return new self($model);
    }

    /**
     * Create XmlDoc from XML string
     *
     * @param string $xmlContent
     * @return self
     */
    public static function fromXml(string $xmlContent): self
    {
        return new self($xmlContent);
    }
}

