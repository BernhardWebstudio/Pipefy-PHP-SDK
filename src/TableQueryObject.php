<?php

namespace GraphQL\SchemaObject;

class TableQueryObject extends QueryObject
{
    public function selectAnyoneCanCreateCard(): static
    {
        $this->selectField('anyone_can_create_card');

        return $this;
    }

    public function selectAuthorization(): static
    {
        $this->selectField('authorization');

        return $this;
    }

    public function selectColor(): static
    {
        $this->selectField('color');

        return $this;
    }

    public function selectConditionExpressionsFieldIds(): static
    {
        $this->selectField('conditionExpressionsFieldIds');

        return $this;
    }

    public function selectCreateRecordButtonLabel(): static
    {
        $this->selectField('create_record_button_label');

        return $this;
    }

    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectIcon(): static
    {
        $this->selectField('icon');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLabels(TableLabelsArgumentsObject $tableLabelsArgumentsObject = null): LabelQueryObject
    {
        $labelQueryObject = new LabelQueryObject('labels');
        if ($tableLabelsArgumentsObject !== null) {
            $labelQueryObject->appendArguments($tableLabelsArgumentsObject->toArray());
        }
        $this->selectField($labelQueryObject);

        return $labelQueryObject;
    }

    public function selectMembers(TableMembersArgumentsObject $tableMembersArgumentsObject = null): MemberQueryObject
    {
        $memberQueryObject = new MemberQueryObject('members');
        if ($tableMembersArgumentsObject !== null) {
            $memberQueryObject->appendArguments($tableMembersArgumentsObject->toArray());
        }
        $this->selectField($memberQueryObject);

        return $memberQueryObject;
    }

    public function selectMyPermissions(TableMyPermissionsArgumentsObject $tableMyPermissionsArgumentsObject = null): TablePermissionQueryObject
    {
        $tablePermissionQueryObject = new TablePermissionQueryObject('my_permissions');
        if ($tableMyPermissionsArgumentsObject !== null) {
            $tablePermissionQueryObject->appendArguments($tableMyPermissionsArgumentsObject->toArray());
        }
        $this->selectField($tablePermissionQueryObject);

        return $tablePermissionQueryObject;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOrderableFields(): static
    {
        $this->selectField('orderableFields');

        return $this;
    }

    public function selectOrderableTypes(): static
    {
        $this->selectField('orderableTypes');

        return $this;
    }

    public function selectOrganization(TableOrganizationArgumentsObject $tableOrganizationArgumentsObject = null): OrganizationQueryObject
    {
        $organizationQueryObject = new OrganizationQueryObject('organization');
        if ($tableOrganizationArgumentsObject !== null) {
            $organizationQueryObject->appendArguments($tableOrganizationArgumentsObject->toArray());
        }
        $this->selectField($organizationQueryObject);

        return $organizationQueryObject;
    }

    public function selectPublic(): static
    {
        $this->selectField('public');

        return $this;
    }

    public function selectPublicFormSettings(TablePublicFormSettingsArgumentsObject $tablePublicFormSettingsArgumentsObject = null): PublicFormSettingsQueryObject
    {
        $publicFormSettingsQueryObject = new PublicFormSettingsQueryObject('publicFormSettings');
        if ($tablePublicFormSettingsArgumentsObject !== null) {
            $publicFormSettingsQueryObject->appendArguments($tablePublicFormSettingsArgumentsObject->toArray());
        }
        $this->selectField($publicFormSettingsQueryObject);

        return $publicFormSettingsQueryObject;
    }

    public function selectPublicForm(): static
    {
        $this->selectField('public_form');

        return $this;
    }

    public function selectStatuses(TableStatusesArgumentsObject $tableStatusesArgumentsObject = null): TableRecordStatusQueryObject
    {
        $tableRecordStatusQueryObject = new TableRecordStatusQueryObject('statuses');
        if ($tableStatusesArgumentsObject !== null) {
            $tableRecordStatusQueryObject->appendArguments($tableStatusesArgumentsObject->toArray());
        }
        $this->selectField($tableRecordStatusQueryObject);

        return $tableRecordStatusQueryObject;
    }

    public function selectSummaryAttributes(TableSummaryAttributesArgumentsObject $tableSummaryAttributesArgumentsObject = null): SummaryAttributeQueryObject
    {
        $summaryAttributeQueryObject = new SummaryAttributeQueryObject('summary_attributes');
        if ($tableSummaryAttributesArgumentsObject !== null) {
            $summaryAttributeQueryObject->appendArguments($tableSummaryAttributesArgumentsObject->toArray());
        }
        $this->selectField($summaryAttributeQueryObject);

        return $summaryAttributeQueryObject;
    }

    public function selectSummaryOptions(TableSummaryOptionsArgumentsObject $tableSummaryOptionsArgumentsObject = null): SummaryGroupQueryObject
    {
        $summaryGroupQueryObject = new SummaryGroupQueryObject('summary_options');
        if ($tableSummaryOptionsArgumentsObject !== null) {
            $summaryGroupQueryObject->appendArguments($tableSummaryOptionsArgumentsObject->toArray());
        }
        $this->selectField($summaryGroupQueryObject);

        return $summaryGroupQueryObject;
    }

    public function selectTableFields(TableTableFieldsArgumentsObject $tableTableFieldsArgumentsObject = null): TableFieldQueryObject
    {
        $tableFieldQueryObject = new TableFieldQueryObject('table_fields');
        if ($tableTableFieldsArgumentsObject !== null) {
            $tableFieldQueryObject->appendArguments($tableTableFieldsArgumentsObject->toArray());
        }
        $this->selectField($tableFieldQueryObject);

        return $tableFieldQueryObject;
    }

    public function selectTableRecords(TableTableRecordsArgumentsObject $tableTableRecordsArgumentsObject = null): TableRecordConnectionQueryObject
    {
        $tableRecordConnectionQueryObject = new TableRecordConnectionQueryObject('table_records');
        if ($tableTableRecordsArgumentsObject !== null) {
            $tableRecordConnectionQueryObject->appendArguments($tableTableRecordsArgumentsObject->toArray());
        }
        $this->selectField($tableRecordConnectionQueryObject);

        return $tableRecordConnectionQueryObject;
    }

    public function selectTableRecordsCount(): static
    {
        $this->selectField('table_records_count');

        return $this;
    }

    public function selectTitleField(TableTitleFieldArgumentsObject $tableTitleFieldArgumentsObject = null): TableFieldQueryObject
    {
        $tableFieldQueryObject = new TableFieldQueryObject('title_field');
        if ($tableTitleFieldArgumentsObject !== null) {
            $tableFieldQueryObject->appendArguments($tableTitleFieldArgumentsObject->toArray());
        }
        $this->selectField($tableFieldQueryObject);

        return $tableFieldQueryObject;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }

    public function selectUsersCount(): static
    {
        $this->selectField('users_count');

        return $this;
    }

    public function selectUuid(): static
    {
        $this->selectField('uuid');

        return $this;
    }
}
