<?php

namespace GraphQL\SchemaObject;

class ConditionExpressionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'ConditionExpression';

    public function selectFieldAddress()
    {
        $this->selectField('field_address');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectOperation()
    {
        $this->selectField('operation');

        return $this;
    }

    public function selectStructureId()
    {
        $this->selectField('structure_id');

        return $this;
    }

    public function selectValue()
    {
        $this->selectField('value');

        return $this;
    }
}
