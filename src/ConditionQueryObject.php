<?php

namespace GraphQL\SchemaObject;

class ConditionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Condition';

    public function selectExpressions(ConditionExpressionsArgumentsObject $argsObject = null)
    {
        $object = new ConditionExpressionQueryObject('expressions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpressionsStructure()
    {
        $this->selectField('expressions_structure');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectRelatedCards(ConditionRelatedCardsArgumentsObject $argsObject = null)
    {
        $object = new CardQueryObject('related_cards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
