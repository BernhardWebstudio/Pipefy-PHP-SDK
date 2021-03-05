<?php

namespace GraphQL\SchemaObject;

class RepoItemTypesEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }
}
