<?php

namespace GraphQL\SchemaObject;

class TableEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(TableEdgeNodeArgumentsObject $tableEdgeNodeArgumentsObject = null): TableQueryObject
    {
        $tableQueryObject = new TableQueryObject('node');
        if ($tableEdgeNodeArgumentsObject !== null) {
            $tableQueryObject->appendArguments($tableEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($tableQueryObject);

        return $tableQueryObject;
    }
}
