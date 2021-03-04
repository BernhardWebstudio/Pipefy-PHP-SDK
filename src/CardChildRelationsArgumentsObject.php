<?php

namespace GraphQL\SchemaObject;

class CardChildRelationsArgumentsObject extends ArgumentsObject
{
    protected $child_repo_id;

    public function setChildRepoId($childRepoId)
    {
        $this->child_repo_id = $childRepoId;

        return $this;
    }
}
