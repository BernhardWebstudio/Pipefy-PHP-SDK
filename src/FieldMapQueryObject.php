<?php

namespace GraphQL\SchemaObject;

class FieldMapQueryObject extends QueryObject
{
    public function selectFieldId(): static
    {
        $this->selectField('fieldId');

        return $this;
    }

    public function selectInputMode(): static
    {
        $this->selectField('inputMode');

        return $this;
    }

    public function selectValue(): static
    {
        $this->selectField('value');

        return $this;
    }
}
