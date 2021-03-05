<?php

namespace GraphQL\SchemaObject;

class TableRecordFieldQueryObject extends QueryObject
{
    public function selectArrayValue(): static
    {
        $this->selectField('array_value');

        return $this;
    }

    public function selectAssigneeValues(TableRecordFieldAssigneeValuesArgumentsObject $tableRecordFieldAssigneeValuesArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('assignee_values');
        if ($tableRecordFieldAssigneeValuesArgumentsObject !== null) {
            $userQueryObject->appendArguments($tableRecordFieldAssigneeValuesArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectDateValue(): static
    {
        $this->selectField('date_value');

        return $this;
    }

    public function selectDatetimeValue(): static
    {
        $this->selectField('datetime_value');

        return $this;
    }

    public function selectMinimalField(TableRecordFieldFieldArgumentsObject $tableRecordFieldFieldArgumentsObject = null): MinimalFieldQueryObject
    {
        $minimalFieldQueryObject = new MinimalFieldQueryObject('field');
        if ($tableRecordFieldFieldArgumentsObject !== null) {
            $minimalFieldQueryObject->appendArguments($tableRecordFieldFieldArgumentsObject->toArray());
        }
        $this->selectField($minimalFieldQueryObject);

        return $minimalFieldQueryObject;
    }

    public function selectFilledAt(): static
    {
        $this->selectField('filled_at');

        return $this;
    }

    public function selectFloatValue(): static
    {
        $this->selectField('float_value');

        return $this;
    }

    public function selectIndexName(): static
    {
        $this->selectField('indexName');

        return $this;
    }

    public function selectLabelValues(TableRecordFieldLabelValuesArgumentsObject $tableRecordFieldLabelValuesArgumentsObject = null): FieldLabelQueryObject
    {
        $fieldLabelQueryObject = new FieldLabelQueryObject('label_values');
        if ($tableRecordFieldLabelValuesArgumentsObject !== null) {
            $fieldLabelQueryObject->appendArguments($tableRecordFieldLabelValuesArgumentsObject->toArray());
        }
        $this->selectField($fieldLabelQueryObject);

        return $fieldLabelQueryObject;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPhaseField(TableRecordFieldPhaseFieldArgumentsObject $tableRecordFieldPhaseFieldArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('phase_field');
        if ($tableRecordFieldPhaseFieldArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($tableRecordFieldPhaseFieldArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    public function selectReportValue(): static
    {
        $this->selectField('report_value');

        return $this;
    }

    public function selectRequired(): static
    {
        $this->selectField('required');

        return $this;
    }

    public function selectUpdatedAt(): static
    {
        $this->selectField('updated_at');

        return $this;
    }

    public function selectValue(): static
    {
        $this->selectField('value');

        return $this;
    }
}
