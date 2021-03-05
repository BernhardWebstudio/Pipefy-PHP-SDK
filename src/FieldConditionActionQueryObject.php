<?php

namespace GraphQL\SchemaObject;

class FieldConditionActionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'FieldConditionAction';

    public function selectActionId()
    {
        $this->selectField('actionId');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPhase(FieldConditionActionPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject('phase');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhaseField(FieldConditionActionPhaseFieldArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('phaseField');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated phaseFieldId is deprecated. Use phaseField instead.
     */
    public function selectPhaseFieldId()
    {
        $this->selectField('phaseFieldId');

        return $this;
    }

    public function selectWhenEvaluator()
    {
        $this->selectField('whenEvaluator');

        return $this;
    }
}
