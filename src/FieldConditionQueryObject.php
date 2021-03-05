<?php

namespace GraphQL\SchemaObject;

class FieldConditionQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'FieldCondition';

    public function selectActions(FieldConditionActionsArgumentsObject $argsObject = null)
    {
        $object = new FieldConditionActionQueryObject('actions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCondition(FieldConditionConditionArgumentsObject $argsObject = null)
    {
        $object = new ConditionQueryObject('condition');
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

    public function selectIsTrueFor()
    {
        $this->selectField('isTrueFor');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPhase(FieldConditionPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject('phase');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
