<?php

namespace GraphQL\SchemaObject;

class SummaryAttributeQueryObject extends QueryObject
{
    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }
}
