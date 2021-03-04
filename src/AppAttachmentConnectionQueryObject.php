<?php

namespace GraphQL\SchemaObject;

class AppAttachmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppAttachmentConnection";

    public function selectEdges(AppAttachmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppAttachmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppAttachmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
