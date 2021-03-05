<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(PublicTableRecordEdgeNodeArgumentsObject $publicTableRecordEdgeNodeArgumentsObject = null): PublicTableRecordQueryObject
    {
        $publicTableRecordQueryObject = new PublicTableRecordQueryObject('node');
        if ($publicTableRecordEdgeNodeArgumentsObject !== null) {
            $publicTableRecordQueryObject->appendArguments($publicTableRecordEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($publicTableRecordQueryObject);

        return $publicTableRecordQueryObject;
    }
}
