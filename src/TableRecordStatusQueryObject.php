<?php

namespace GraphQL\SchemaObject;

class TableRecordStatusQueryObject extends QueryObject
{
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
