<?php

namespace GraphQL\SchemaObject;

class PhaseQueryObject extends QueryObject
{
    public function selectCards(PhaseCardsArgumentsObject $phaseCardsArgumentsObject = null): CardConnectionQueryObject
    {
        $cardConnectionQueryObject = new CardConnectionQueryObject('cards');
        if ($phaseCardsArgumentsObject !== null) {
            $cardConnectionQueryObject->appendArguments($phaseCardsArgumentsObject->toArray());
        }
        $this->selectField($cardConnectionQueryObject);

        return $cardConnectionQueryObject;
    }

    public function selectCardsCanBeMovedToPhases(PhaseCardsCanBeMovedToPhasesArgumentsObject $phaseCardsCanBeMovedToPhasesArgumentsObject = null): \GraphQL\SchemaObject\PhaseQueryObject
    {
        $self = new self('cards_can_be_moved_to_phases');
        if ($phaseCardsCanBeMovedToPhasesArgumentsObject !== null) {
            $self->appendArguments($phaseCardsCanBeMovedToPhasesArgumentsObject->toArray());
        }
        $this->selectField($self);

        return $self;
    }

    public function selectCardsCount(): static
    {
        $this->selectField('cards_count');

        return $this;
    }

    public function selectColor(): static
    {
        $this->selectField('color');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectDone(): static
    {
        $this->selectField('done');

        return $this;
    }

    public function selectExpiredCardsCount(): static
    {
        $this->selectField('expiredCardsCount');

        return $this;
    }

    public function selectFieldConditions(PhaseFieldConditionsArgumentsObject $phaseFieldConditionsArgumentsObject = null): FieldConditionQueryObject
    {
        $fieldConditionQueryObject = new FieldConditionQueryObject('fieldConditions');
        if ($phaseFieldConditionsArgumentsObject !== null) {
            $fieldConditionQueryObject->appendArguments($phaseFieldConditionsArgumentsObject->toArray());
        }
        $this->selectField($fieldConditionQueryObject);

        return $fieldConditionQueryObject;
    }

    public function selectFields(PhaseFieldsArgumentsObject $phaseFieldsArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('fields');
        if ($phaseFieldsArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($phaseFieldsArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLateCardsCount(): static
    {
        $this->selectField('lateCardsCount');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectSequentialId(): static
    {
        $this->selectField('sequentialId');

        return $this;
    }
}
