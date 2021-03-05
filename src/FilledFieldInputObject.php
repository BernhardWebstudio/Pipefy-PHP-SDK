<?php

namespace GraphQL\SchemaObject;

class FilledFieldInputObject extends InputObject
{
    protected $fieldId;

    /**
     * @var mixed[]|null
     */
    protected $fieldValue;

    public function setFieldId($fieldId): static
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * @param mixed[]|null $fieldValue
     */
    public function setFieldValue(array $fieldValue): static
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }
}
