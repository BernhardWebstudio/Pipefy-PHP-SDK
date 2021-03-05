<?php

namespace GraphQL\SchemaObject;

class TableEdgeQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableEdge';

    public function selectCursor()
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(TableEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TableQueryObject('node');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
