<?php

namespace GraphQL\SchemaObject;

class CardFieldQueryObject extends QueryObject
{
    public function selectArrayValue(): static
    {
        $this->selectField('array_value');

        return $this;
    }

    public function selectAssigneeValues(CardFieldAssigneeValuesArgumentsObject $cardFieldAssigneeValuesArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('assignee_values');
        if ($cardFieldAssigneeValuesArgumentsObject !== null) {
            $userQueryObject->appendArguments($cardFieldAssigneeValuesArgumentsObject->toArray());
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

    public function selectMinimalField(CardFieldFieldArgumentsObject $cardFieldFieldArgumentsObject = null): MinimalFieldQueryObject
    {
        $minimalFieldQueryObject = new MinimalFieldQueryObject('field');
        if ($cardFieldFieldArgumentsObject !== null) {
            $minimalFieldQueryObject->appendArguments($cardFieldFieldArgumentsObject->toArray());
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

    public function selectLabelValues(CardFieldLabelValuesArgumentsObject $cardFieldLabelValuesArgumentsObject = null): FieldLabelQueryObject
    {
        $fieldLabelQueryObject = new FieldLabelQueryObject('label_values');
        if ($cardFieldLabelValuesArgumentsObject !== null) {
            $fieldLabelQueryObject->appendArguments($cardFieldLabelValuesArgumentsObject->toArray());
        }
        $this->selectField($fieldLabelQueryObject);

        return $fieldLabelQueryObject;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPhaseField(CardFieldPhaseFieldArgumentsObject $cardFieldPhaseFieldArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('phase_field');
        if ($cardFieldPhaseFieldArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($cardFieldPhaseFieldArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    public function selectReportValue(): static
    {
        $this->selectField('report_value');

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
