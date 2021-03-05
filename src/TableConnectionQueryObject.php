<?php

namespace GraphQL\SchemaObject;

class TableConnectionQueryObject extends QueryObject
{
    public function selectEdges(TableConnectionEdgesArgumentsObject $tableConnectionEdgesArgumentsObject = null): TableEdgeQueryObject
    {
        $tableEdgeQueryObject = new TableEdgeQueryObject('edges');
        if ($tableConnectionEdgesArgumentsObject !== null) {
            $tableEdgeQueryObject->appendArguments($tableConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($tableEdgeQueryObject);

        return $tableEdgeQueryObject;
    }

    public function selectPageInfo(TableConnectionPageInfoArgumentsObject $tableConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($tableConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($tableConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
