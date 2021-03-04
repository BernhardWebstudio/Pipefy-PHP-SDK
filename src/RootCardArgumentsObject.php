<?php

namespace GraphQL\SchemaObject;

class RootCardArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
