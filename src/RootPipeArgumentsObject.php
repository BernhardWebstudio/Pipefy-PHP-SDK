<?php

namespace GraphQL\SchemaObject;

class RootPipeArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
