<?php

namespace GraphQL\SchemaObject;

class CardEdgeQueryObject extends QueryObject
{
    public function selectCursor(): static
    {
        $this->selectField('cursor');

        return $this;
    }

    public function selectNode(CardEdgeNodeArgumentsObject $cardEdgeNodeArgumentsObject = null): CardQueryObject
    {
        $cardQueryObject = new CardQueryObject('node');
        if ($cardEdgeNodeArgumentsObject !== null) {
            $cardQueryObject->appendArguments($cardEdgeNodeArgumentsObject->toArray());
        }
        $this->selectField($cardQueryObject);

        return $cardQueryObject;
    }
}
