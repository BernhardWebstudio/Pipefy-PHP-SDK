<?php

namespace GraphQL\SchemaObject;

class RepoItemTypesEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RepoItemTypesEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
