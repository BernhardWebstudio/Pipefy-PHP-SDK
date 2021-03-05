<?php

namespace GraphQL\SchemaObject;

class PhaseQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Phase';

    public function selectCards(PhaseCardsArgumentsObject $argsObject = null)
    {
        $object = new CardConnectionQueryObject('cards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCardsCanBeMovedToPhases(PhaseCardsCanBeMovedToPhasesArgumentsObject $argsObject = null)
    {
        $object = new self('cards_can_be_moved_to_phases');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCardsCount()
    {
        $this->selectField('cards_count');

        return $this;
    }

    public function selectColor()
    {
        $this->selectField('color');

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');

        return $this;
    }

    public function selectDone()
    {
        $this->selectField('done');

        return $this;
    }

    public function selectExpiredCardsCount()
    {
        $this->selectField('expiredCardsCount');

        return $this;
    }

    public function selectFieldConditions(PhaseFieldConditionsArgumentsObject $argsObject = null)
    {
        $object = new FieldConditionQueryObject('fieldConditions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFields(PhaseFieldsArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('fields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLateCardsCount()
    {
        $this->selectField('lateCardsCount');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectSequentialId()
    {
        $this->selectField('sequentialId');

        return $this;
    }
}
