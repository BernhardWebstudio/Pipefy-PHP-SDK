<?php

namespace GraphQL\SchemaObject;

class SummaryQueryObject extends QueryObject
{
    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }

    public function selectType(): static
    {
        $this->selectField('type');

        return $this;
    }

    public function selectValue(): static
    {
        $this->selectField('value');

        return $this;
    }
}
