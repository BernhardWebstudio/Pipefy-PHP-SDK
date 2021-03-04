<?php

namespace GraphQL\SchemaObject;

class RootPhaseArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
