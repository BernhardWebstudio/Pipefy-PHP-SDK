<?php

namespace GraphQL\SchemaObject;

class PhaseFieldEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(PhaseFieldEdgeNodeArgumentsObject $phaseFieldEdgeNodeArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('node');
        if ($phaseFieldEdgeNodeArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($phaseFieldEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }
}
