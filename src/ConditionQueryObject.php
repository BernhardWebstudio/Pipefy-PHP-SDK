<?php

namespace GraphQL\SchemaObject;

class ConditionQueryObject extends QueryObject
{
    public function selectExpressions(ConditionExpressionsArgumentsObject $conditionExpressionsArgumentsObject = null): ConditionExpressionQueryObject
    {
        $conditionExpressionQueryObject = new ConditionExpressionQueryObject('expressions');
        if ($conditionExpressionsArgumentsObject !== null) {
            $conditionExpressionQueryObject->appendArguments($conditionExpressionsArgumentsObject->toArray());
        }
        $this->selectField($conditionExpressionQueryObject);

        return $conditionExpressionQueryObject;
    }

    public function selectExpressionsStructure(): static
    {
        $this->selectField('expressions_structure');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectRelatedCards(ConditionRelatedCardsArgumentsObject $conditionRelatedCardsArgumentsObject = null): CardQueryObject
    {
        $cardQueryObject = new CardQueryObject('related_cards');
        if ($conditionRelatedCardsArgumentsObject !== null) {
            $cardQueryObject->appendArguments($conditionRelatedCardsArgumentsObject->toArray());
        }
        $this->selectField($cardQueryObject);

        return $cardQueryObject;
    }
}
