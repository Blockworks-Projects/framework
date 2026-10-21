<?php

namespace DS\Controller\Api\Meta;

trait RecordJsonSerializeTrait
{
    /**
     * @return mixed
     * @throws \JsonException
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->data;
    }
}
