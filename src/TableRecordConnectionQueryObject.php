<?php

namespace GraphQL\SchemaObject;

class TableRecordConnectionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableRecordConnection';

    public function selectEdges(TableRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TableRecordEdgeQueryObject('edges');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TableRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject('pageInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
