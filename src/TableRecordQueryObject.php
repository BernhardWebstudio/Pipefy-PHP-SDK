<?php

namespace GraphQL\SchemaObject;

class TableRecordQueryObject extends QueryObject
{
    public function selectAssignees(TableRecordAssigneesArgumentsObject $tableRecordAssigneesArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('assignees');
        if ($tableRecordAssigneesArgumentsObject !== null) {
            $userQueryObject->appendArguments($tableRecordAssigneesArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectCreatedBy(TableRecordCreatedByArgumentsObject $tableRecordCreatedByArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('created_by');
        if ($tableRecordCreatedByArgumentsObject !== null) {
            $userQueryObject->appendArguments($tableRecordCreatedByArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectDone(): static
    {
        $this->selectField('done');

        return $this;
    }

    public function selectDueDate(): static
    {
        $this->selectField('due_date');

        return $this;
    }

    public function selectFinishedAt(): static
    {
        $this->selectField('finished_at');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLabels(TableRecordLabelsArgumentsObject $tableRecordLabelsArgumentsObject = null): LabelQueryObject
    {
        $labelQueryObject = new LabelQueryObject('labels');
        if ($tableRecordLabelsArgumentsObject !== null) {
            $labelQueryObject->appendArguments($tableRecordLabelsArgumentsObject->toArray());
        }
        $this->selectField($labelQueryObject);

        return $labelQueryObject;
    }

    public function selectParentRelations(TableRecordParentRelationsArgumentsObject $tableRecordParentRelationsArgumentsObject = null): TableRecordRelationQueryObject
    {
        $tableRecordRelationQueryObject = new TableRecordRelationQueryObject('parent_relations');
        if ($tableRecordParentRelationsArgumentsObject !== null) {
            $tableRecordRelationQueryObject->appendArguments($tableRecordParentRelationsArgumentsObject->toArray());
        }
        $this->selectField($tableRecordRelationQueryObject);

        return $tableRecordRelationQueryObject;
    }

    public function selectPath(): static
    {
        $this->selectField('path');

        return $this;
    }

    public function selectRecordFields(TableRecordRecordFieldsArgumentsObject $tableRecordRecordFieldsArgumentsObject = null): TableRecordFieldQueryObject
    {
        $tableRecordFieldQueryObject = new TableRecordFieldQueryObject('record_fields');
        if ($tableRecordRecordFieldsArgumentsObject !== null) {
            $tableRecordFieldQueryObject->appendArguments($tableRecordRecordFieldsArgumentsObject->toArray());
        }
        $this->selectField($tableRecordFieldQueryObject);

        return $tableRecordFieldQueryObject;
    }

    public function selectStatus(TableRecordStatusArgumentsObject $tableRecordStatusArgumentsObject = null): TableRecordStatusQueryObject
    {
        $tableRecordStatusQueryObject = new TableRecordStatusQueryObject('status');
        if ($tableRecordStatusArgumentsObject !== null) {
            $tableRecordStatusQueryObject->appendArguments($tableRecordStatusArgumentsObject->toArray());
        }
        $this->selectField($tableRecordStatusQueryObject);

        return $tableRecordStatusQueryObject;
    }

    public function selectSummary(TableRecordSummaryArgumentsObject $tableRecordSummaryArgumentsObject = null): SummaryQueryObject
    {
        $summaryQueryObject = new SummaryQueryObject('summary');
        if ($tableRecordSummaryArgumentsObject !== null) {
            $summaryQueryObject->appendArguments($tableRecordSummaryArgumentsObject->toArray());
        }
        $this->selectField($summaryQueryObject);

        return $summaryQueryObject;
    }

    public function selectTable(TableRecordTableArgumentsObject $tableRecordTableArgumentsObject = null): TableQueryObject
    {
        $tableQueryObject = new TableQueryObject('table');
        if ($tableRecordTableArgumentsObject !== null) {
            $tableQueryObject->appendArguments($tableRecordTableArgumentsObject->toArray());
        }
        $this->selectField($tableQueryObject);

        return $tableQueryObject;
    }

    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }

    public function selectUpdatedAt(): static
    {
        $this->selectField('updated_at');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
