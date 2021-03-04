<?php

namespace GraphQL\SchemaObject;

class TableRecordStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "TableRecordStatus";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
