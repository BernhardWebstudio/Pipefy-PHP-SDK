<?php

namespace GraphQL\SchemaObject;

class TableRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TableRecordEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TableRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TableRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
