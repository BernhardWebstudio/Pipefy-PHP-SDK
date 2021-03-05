<?php

namespace GraphQL\SchemaObject;

class TableRecordConnectionQueryObject extends QueryObject
{
    public function selectEdges(TableRecordConnectionEdgesArgumentsObject $tableRecordConnectionEdgesArgumentsObject = null): TableRecordEdgeQueryObject
    {
        $tableRecordEdgeQueryObject = new TableRecordEdgeQueryObject('edges');
        if ($tableRecordConnectionEdgesArgumentsObject !== null) {
            $tableRecordEdgeQueryObject->appendArguments($tableRecordConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($tableRecordEdgeQueryObject);

        return $tableRecordEdgeQueryObject;
    }

    public function selectPageInfo(TableRecordConnectionPageInfoArgumentsObject $tableRecordConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($tableRecordConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($tableRecordConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
