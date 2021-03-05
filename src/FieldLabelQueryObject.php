<?php

namespace GraphQL\SchemaObject;

class FieldLabelQueryObject extends QueryObject
{
    public function selectColor(): static
    {
        $this->selectField('color');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }
}
