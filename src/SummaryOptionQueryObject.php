<?php

namespace GraphQL\SchemaObject;

class SummaryOptionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'SummaryOption';

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField('label');

        return $this;
    }
}
