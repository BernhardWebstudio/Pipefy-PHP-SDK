<?php

namespace GraphQL\SchemaObject;

class CardParentRelationsArgumentsObject extends ArgumentsObject
{
    protected $parent_repo_id;

    public function setParentRepoId($parentRepoId): static
    {
        $this->parent_repo_id = $parentRepoId;

        return $this;
    }
}
