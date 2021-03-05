<?php

namespace GraphQL\SchemaObject;

class TableRecordWithCountConnectionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableRecordWithCountConnection';

    public function selectEdges(TableRecordWithCountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TableRecordEdgeQueryObject('edges');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMatchCount()
    {
        $this->selectField('matchCount');

        return $this;
    }

    public function selectPageInfo(TableRecordWithCountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject('pageInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
