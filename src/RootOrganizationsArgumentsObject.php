<?php

namespace GraphQL\SchemaObject;

class RootOrganizationsArgumentsObject extends ArgumentsObject
{
    /**
     * @var mixed[]|null
     */
    protected $ids;

    /**
     * @param mixed[]|null $ids
     */
    public function setIds(?array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
