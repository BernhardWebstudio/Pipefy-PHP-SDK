<?php

namespace GraphQL\SchemaObject;

class AppAttachmentEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(AppAttachmentEdgeNodeArgumentsObject $appAttachmentEdgeNodeArgumentsObject = null): AppAttachmentQueryObject
    {
        $appAttachmentQueryObject = new AppAttachmentQueryObject('node');
        if ($appAttachmentEdgeNodeArgumentsObject !== null) {
            $appAttachmentQueryObject->appendArguments($appAttachmentEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($appAttachmentQueryObject);

        return $appAttachmentQueryObject;
    }
}
