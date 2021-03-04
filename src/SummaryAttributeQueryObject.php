<?php

namespace GraphQL\SchemaObject;

class SummaryAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SummaryAttribute";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
