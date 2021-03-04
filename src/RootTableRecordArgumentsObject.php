<?php

namespace GraphQL\SchemaObject;

class RootTableRecordArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
