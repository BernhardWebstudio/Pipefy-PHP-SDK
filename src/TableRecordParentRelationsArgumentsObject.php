<?php

namespace GraphQL\SchemaObject;

class TableRecordParentRelationsArgumentsObject extends ArgumentsObject
{
    protected $relation_name;

    public function setRelationName($relationName)
    {
        $this->relation_name = $relationName;

        return $this;
    }
}
