<?php

namespace GraphQL\SchemaObject;

class AppAttachmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppAttachmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppAttachmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppAttachmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
