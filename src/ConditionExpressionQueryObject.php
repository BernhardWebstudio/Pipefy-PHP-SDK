<?php

namespace GraphQL\SchemaObject;

class ConditionExpressionQueryObject extends QueryObject
{
    public function selectFieldAddress(): static
    {
        $this->selectField('field_address');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectOperation(): static
    {
        $this->selectField('operation');

        return $this;
    }

    public function selectStructureId(): static
    {
        $this->selectField('structure_id');

        return $this;
    }

    public function selectValue(): static
    {
        $this->selectField('value');

        return $this;
    }
}
