<?php

namespace GraphQL\SchemaObject;

class RepoItemTypesConnectionQueryObject extends QueryObject
{
    public function selectEdges(RepoItemTypesConnectionEdgesArgumentsObject $repoItemTypesConnectionEdgesArgumentsObject = null): RepoItemTypesEdgeQueryObject
    {
        $repoItemTypesEdgeQueryObject = new RepoItemTypesEdgeQueryObject('edges');
        if ($repoItemTypesConnectionEdgesArgumentsObject !== null) {
            $repoItemTypesEdgeQueryObject->appendArguments($repoItemTypesConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($repoItemTypesEdgeQueryObject);

        return $repoItemTypesEdgeQueryObject;
    }

    public function selectPageInfo(RepoItemTypesConnectionPageInfoArgumentsObject $repoItemTypesConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($repoItemTypesConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($repoItemTypesConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
