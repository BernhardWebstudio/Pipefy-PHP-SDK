<?php

namespace GraphQL\SchemaObject;

class RootPipeArgumentsObject extends ArgumentsObject
{
    /** @var string|int $id https://api-docs.pipefy.com/reference/scalars/#ID **/
    protected $id;

    public function setId(int|string $id): static
    {
        $this->id = $id;

        return $this;
    }
}
