<?php

namespace GraphQL\SchemaObject;

class AppAttachmentConnectionQueryObject extends QueryObject
{
    public function selectEdges(AppAttachmentConnectionEdgesArgumentsObject $appAttachmentConnectionEdgesArgumentsObject = null): AppAttachmentEdgeQueryObject
    {
        $appAttachmentEdgeQueryObject = new AppAttachmentEdgeQueryObject('edges');
        if ($appAttachmentConnectionEdgesArgumentsObject !== null) {
            $appAttachmentEdgeQueryObject->appendArguments($appAttachmentConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($appAttachmentEdgeQueryObject);

        return $appAttachmentEdgeQueryObject;
    }

    public function selectPageInfo(AppAttachmentConnectionPageInfoArgumentsObject $appAttachmentConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($appAttachmentConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($appAttachmentConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
