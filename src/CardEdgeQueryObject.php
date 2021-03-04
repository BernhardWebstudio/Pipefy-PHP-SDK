<?php

namespace GraphQL\SchemaObject;

class CardEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CardEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CardEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CardQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
