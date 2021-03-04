<?php

namespace GraphQL\SchemaObject;

class PhaseFieldEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PhaseFieldEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(PhaseFieldEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
