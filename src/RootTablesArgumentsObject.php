<?php

namespace GraphQL\SchemaObject;

class RootTablesArgumentsObject extends ArgumentsObject
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
