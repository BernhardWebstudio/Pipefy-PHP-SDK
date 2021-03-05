<?php

namespace GraphQL\SchemaObject;

class TableRecordFieldQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableRecordField';

    public function selectArrayValue()
    {
        $this->selectField('array_value');

        return $this;
    }

    public function selectAssigneeValues(TableRecordFieldAssigneeValuesArgumentsObject $argsObject = null)
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

    public function selectMinimalField(TableRecordFieldFieldArgumentsObject $argsObject = null)
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

    public function selectLabelValues(TableRecordFieldLabelValuesArgumentsObject $argsObject = null)
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

    public function selectPhaseField(TableRecordFieldPhaseFieldArgumentsObject $argsObject = null)
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

    public function selectRequired()
    {
        $this->selectField('required');

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
