<?php

namespace GraphQL\SchemaObject;

class TableRecordWithCountConnectionQueryObject extends QueryObject
{
    public function selectEdges(TableRecordWithCountConnectionEdgesArgumentsObject $tableRecordWithCountConnectionEdgesArgumentsObject = null): TableRecordEdgeQueryObject
    {
        $tableRecordEdgeQueryObject = new TableRecordEdgeQueryObject('edges');
        if ($tableRecordWithCountConnectionEdgesArgumentsObject !== null) {
            $tableRecordEdgeQueryObject->appendArguments($tableRecordWithCountConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($tableRecordEdgeQueryObject);

        return $tableRecordEdgeQueryObject;
    }

    public function selectMatchCount(): static
    {
        $this->selectField('matchCount');

        return $this;
    }

    public function selectPageInfo(TableRecordWithCountConnectionPageInfoArgumentsObject $tableRecordWithCountConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($tableRecordWithCountConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($tableRecordWithCountConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
