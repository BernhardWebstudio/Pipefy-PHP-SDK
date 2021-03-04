<?php

namespace GraphQL\SchemaObject;

class FilledFieldInputObject extends InputObject
{
    protected $fieldId;
    protected $fieldValue;

    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    public function setFieldValue(array $fieldValue)
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }
}
