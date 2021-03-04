<?php

namespace GraphQL\SchemaObject;

class OrganizationUsersArgumentsObject extends ArgumentsObject
{
    protected $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
