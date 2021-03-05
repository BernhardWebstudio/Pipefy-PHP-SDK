<?php

namespace GraphQL\SchemaObject;

class ReferenceConnectorFieldInputInputObject extends InputObject
{
    protected $fieldId;

    /**
     * @var \GraphQL\SchemaObject\ReferenceConnectorFieldInputInputObject|null
     */
    protected $nextConnectorField;

    public function setFieldId($fieldId): static
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    public function setNextConnectorField(
        self $referenceConnectorFieldInputInputObject
    ): static {
        $this->nextConnectorField = $referenceConnectorFieldInputInputObject;

        return $this;
    }
}
