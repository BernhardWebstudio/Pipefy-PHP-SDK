<?php

namespace GraphQL\SchemaObject;

class TableConnectionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableConnection';

    public function selectEdges(TableConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TableEdgeQueryObject('edges');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TableConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject('pageInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
