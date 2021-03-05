<?php

namespace GraphQL\SchemaObject;

class TableRecordEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(TableRecordEdgeNodeArgumentsObject $tableRecordEdgeNodeArgumentsObject = null): TableRecordQueryObject
    {
        $tableRecordQueryObject = new TableRecordQueryObject('node');
        if ($tableRecordEdgeNodeArgumentsObject !== null) {
            $tableRecordQueryObject->appendArguments($tableRecordEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($tableRecordQueryObject);

        return $tableRecordQueryObject;
    }
}
