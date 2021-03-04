<?php

namespace GraphQL\SchemaObject;

class RootOrganizationsArgumentsObject extends ArgumentsObject
{
    protected $ids;

    public function setIds(array $ids)
    {
        $this->ids = $ids;

        return $this;
    }
}
