<?php

namespace GraphQL\SchemaObject;

class PhaseFieldConnectionQueryObject extends QueryObject
{
    public function selectEdges(PhaseFieldConnectionEdgesArgumentsObject $phaseFieldConnectionEdgesArgumentsObject = null): PhaseFieldEdgeQueryObject
    {
        $phaseFieldEdgeQueryObject = new PhaseFieldEdgeQueryObject('edges');
        if ($phaseFieldConnectionEdgesArgumentsObject !== null) {
            $phaseFieldEdgeQueryObject->appendArguments($phaseFieldConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldEdgeQueryObject);

        return $phaseFieldEdgeQueryObject;
    }

    public function selectPageInfo(PhaseFieldConnectionPageInfoArgumentsObject $phaseFieldConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($phaseFieldConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($phaseFieldConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
