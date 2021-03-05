<?php

namespace GraphQL\SchemaObject;

class SummaryOptionQueryObject extends QueryObject
{
    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLabel(): static
    {
        $this->selectField('label');

        return $this;
    }
}
