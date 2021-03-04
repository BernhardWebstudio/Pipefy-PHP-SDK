<?php

namespace GraphQL\SchemaObject;

class RepoItemTypesConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RepoItemTypesConnection";

    public function selectEdges(RepoItemTypesConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new RepoItemTypesEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(RepoItemTypesConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
