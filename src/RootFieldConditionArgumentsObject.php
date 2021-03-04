<?php

namespace GraphQL\SchemaObject;

class RootFieldConditionArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
