<?php

namespace GraphQL\SchemaObject;

class PipeMembersArgumentsObject extends ArgumentsObject
{
    protected $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
