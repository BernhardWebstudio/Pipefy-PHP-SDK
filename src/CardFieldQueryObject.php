<?php

namespace GraphQL\SchemaObject;

class CardFieldQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'CardField';

    public function selectArrayValue()
    {
        $this->selectField('array_value');

        return $this;
    }

    public function selectAssigneeValues(CardFieldAssigneeValuesArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject('assignee_values');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDateValue()
    {
        $this->selectField('date_value');

        return $this;
    }

    public function selectDatetimeValue()
    {
        $this->selectField('datetime_value');

        return $this;
    }

    public function selectMinimalField(CardFieldFieldArgumentsObject $argsObject = null)
    {
        $object = new MinimalFieldQueryObject('field');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFilledAt()
    {
        $this->selectField('filled_at');

        return $this;
    }

    public function selectFloatValue()
    {
        $this->selectField('float_value');

        return $this;
    }

    public function selectIndexName()
    {
        $this->selectField('indexName');

        return $this;
    }

    public function selectLabelValues(CardFieldLabelValuesArgumentsObject $argsObject = null)
    {
        $object = new FieldLabelQueryObject('label_values');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPhaseField(CardFieldPhaseFieldArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('phase_field');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReportValue()
    {
        $this->selectField('report_value');

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField('updated_at');

        return $this;
    }

    public function selectValue()
    {
        $this->selectField('value');

        return $this;
    }
}
