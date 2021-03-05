<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordConnectionQueryObject extends QueryObject
{
    public function selectEdges(PublicTableRecordConnectionEdgesArgumentsObject $publicTableRecordConnectionEdgesArgumentsObject = null): PublicTableRecordEdgeQueryObject
    {
        $publicTableRecordEdgeQueryObject = new PublicTableRecordEdgeQueryObject('edges');
        if ($publicTableRecordConnectionEdgesArgumentsObject !== null) {
            $publicTableRecordEdgeQueryObject->appendArguments($publicTableRecordConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($publicTableRecordEdgeQueryObject);

        return $publicTableRecordEdgeQueryObject;
    }

    public function selectPageInfo(PublicTableRecordConnectionPageInfoArgumentsObject $publicTableRecordConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($publicTableRecordConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($publicTableRecordConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
