<?php

namespace GraphQL\SchemaObject;

class FieldConditionQueryObject extends QueryObject
{
    public function selectActions(FieldConditionActionsArgumentsObject $fieldConditionActionsArgumentsObject = null): FieldConditionActionQueryObject
    {
        $fieldConditionActionQueryObject = new FieldConditionActionQueryObject('actions');
        if ($fieldConditionActionsArgumentsObject !== null) {
            $fieldConditionActionQueryObject->appendArguments($fieldConditionActionsArgumentsObject->toArray());
        }
        $this->selectField($fieldConditionActionQueryObject);

        return $fieldConditionActionQueryObject;
    }

    public function selectCondition(FieldConditionConditionArgumentsObject $fieldConditionConditionArgumentsObject = null): ConditionQueryObject
    {
        $conditionQueryObject = new ConditionQueryObject('condition');
        if ($fieldConditionConditionArgumentsObject !== null) {
            $conditionQueryObject->appendArguments($fieldConditionConditionArgumentsObject->toArray());
        }
        $this->selectField($conditionQueryObject);

        return $conditionQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectIsTrueFor(): static
    {
        $this->selectField('isTrueFor');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPhase(FieldConditionPhaseArgumentsObject $fieldConditionPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($fieldConditionPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($fieldConditionPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }
}
