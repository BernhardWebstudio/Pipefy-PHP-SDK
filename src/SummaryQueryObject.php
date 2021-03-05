<?php

namespace GraphQL\SchemaObject;

class SummaryQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Summary';

    public function selectTitle()
    {
        $this->selectField('title');

        return $this;
    }

    public function selectType()
    {
        $this->selectField('type');

        return $this;
    }

    public function selectValue()
    {
        $this->selectField('value');

        return $this;
    }
}
