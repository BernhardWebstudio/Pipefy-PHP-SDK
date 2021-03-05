<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordConnectionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PublicTableRecordConnection';

    public function selectEdges(PublicTableRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new PublicTableRecordEdgeQueryObject('edges');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PublicTableRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject('pageInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
