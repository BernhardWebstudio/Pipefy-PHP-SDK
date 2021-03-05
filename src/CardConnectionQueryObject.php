<?php

namespace GraphQL\SchemaObject;

class CardConnectionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'CardConnection';

    public function selectEdges(CardConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CardEdgeQueryObject('edges');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CardConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject('pageInfo');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
