<?php

namespace GraphQL\SchemaObject;

class FieldMapQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'FieldMap';

    public function selectFieldId()
    {
        $this->selectField('fieldId');

        return $this;
    }

    public function selectInputMode()
    {
        $this->selectField('inputMode');

        return $this;
    }

    public function selectValue()
    {
        $this->selectField('value');

        return $this;
    }
}
