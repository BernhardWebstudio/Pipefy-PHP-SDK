<?php

namespace GraphQL\SchemaObject;

class RootCardsImportationsArgumentsObject extends ArgumentsObject
{
    protected $pipeId;

    /**
     * @var mixed[]|null
     */
    protected $status;

    public function setPipeId($pipeId): static
    {
        $this->pipeId = $pipeId;

        return $this;
    }

    /**
     * @param mixed[]|null $status
     */
    public function setStatus(array $status): static
    {
        $this->status = $status;

        return $this;
    }
}
