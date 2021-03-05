<?php

namespace GraphQL\SchemaObject;

class OrganizationMembersArgumentsObject extends ArgumentsObject
{
    protected $limit;

    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
