<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordEdgeQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PublicTableRecordEdge';

    public function selectCursor()
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(PublicTableRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new PublicTableRecordQueryObject('node');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
