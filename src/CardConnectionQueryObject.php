<?php

namespace GraphQL\SchemaObject;

class CardConnectionQueryObject extends QueryObject
{
    public function selectEdges(CardConnectionEdgesArgumentsObject $cardConnectionEdgesArgumentsObject = null): CardEdgeQueryObject
    {
        $cardEdgeQueryObject = new CardEdgeQueryObject('edges');
        if ($cardConnectionEdgesArgumentsObject !== null) {
            $cardEdgeQueryObject->appendArguments($cardConnectionEdgesArgumentsObject->toArray());
        }
        $this->selectField($cardEdgeQueryObject);

        return $cardEdgeQueryObject;
    }

    public function selectPageInfo(CardConnectionPageInfoArgumentsObject $cardConnectionPageInfoArgumentsObject = null): PageInfoQueryObject
    {
        $pageInfoQueryObject = new PageInfoQueryObject('pageInfo');
        if ($cardConnectionPageInfoArgumentsObject !== null) {
            $pageInfoQueryObject->appendArguments($cardConnectionPageInfoArgumentsObject->toArray());
        }
        $this->selectField($pageInfoQueryObject);

        return $pageInfoQueryObject;
    }
}
