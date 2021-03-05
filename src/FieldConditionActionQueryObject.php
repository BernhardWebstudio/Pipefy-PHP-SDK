<?php

namespace GraphQL\SchemaObject;

class FieldConditionActionQueryObject extends QueryObject
{
    public function selectActionId(): static
    {
        $this->selectField('actionId');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPhase(FieldConditionActionPhaseArgumentsObject $fieldConditionActionPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($fieldConditionActionPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($fieldConditionActionPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectPhaseField(FieldConditionActionPhaseFieldArgumentsObject $fieldConditionActionPhaseFieldArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('phaseField');
        if ($fieldConditionActionPhaseFieldArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($fieldConditionActionPhaseFieldArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    /**
     * @deprecated phaseFieldId is deprecated. Use phaseField instead.
     */
    public function selectPhaseFieldId(): static
    {
        $this->selectField('phaseFieldId');

        return $this;
    }

    public function selectWhenEvaluator(): static
    {
        $this->selectField('whenEvaluator');

        return $this;
    }
}
