<?php

namespace GraphQL\SchemaObject;

class PhaseFieldConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PhaseFieldConnection";

    public function selectEdges(PhaseFieldConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PhaseFieldConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
