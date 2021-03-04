<?php

namespace GraphQL\SchemaObject;

class ReferenceConnectorFieldInputInputObject extends InputObject
{
    protected $fieldId;
    protected $nextConnectorField;

    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    public function setNextConnectorField(ReferenceConnectorFieldInputInputObject $referenceConnectorFieldInputInputObject)
    {
        $this->nextConnectorField = $referenceConnectorFieldInputInputObject;

        return $this;
    }
}
