<?php

namespace GraphQL\SchemaObject;

class RootCardsImportationsArgumentsObject extends ArgumentsObject
{
    protected $pipeId;
    protected $status;

    public function setPipeId($pipeId)
    {
        $this->pipeId = $pipeId;

        return $this;
    }

    public function setStatus(array $status)
    {
        $this->status = $status;

        return $this;
    }
}
