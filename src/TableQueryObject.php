<?php

namespace GraphQL\SchemaObject;

class TableQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Table';

    public function selectAnyoneCanCreateCard()
    {
        $this->selectField('anyone_can_create_card');

        return $this;
    }

    public function selectAuthorization()
    {
        $this->selectField('authorization');

        return $this;
    }

    public function selectColor()
    {
        $this->selectField('color');

        return $this;
    }

    public function selectConditionExpressionsFieldIds()
    {
        $this->selectField('conditionExpressionsFieldIds');

        return $this;
    }

    public function selectCreateRecordButtonLabel()
    {
        $this->selectField('create_record_button_label');

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');

        return $this;
    }

    public function selectIcon()
    {
        $this->selectField('icon');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLabels(TableLabelsArgumentsObject $argsObject = null)
    {
        $object = new LabelQueryObject('labels');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMembers(TableMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberQueryObject('members');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMyPermissions(TableMyPermissionsArgumentsObject $argsObject = null)
    {
        $object = new TablePermissionQueryObject('my_permissions');
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

    public function selectOrderableFields()
    {
        $this->selectField('orderableFields');

        return $this;
    }

    public function selectOrderableTypes()
    {
        $this->selectField('orderableTypes');

        return $this;
    }

    public function selectOrganization(TableOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject('organization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublic()
    {
        $this->selectField('public');

        return $this;
    }

    public function selectPublicFormSettings(TablePublicFormSettingsArgumentsObject $argsObject = null)
    {
        $object = new PublicFormSettingsQueryObject('publicFormSettings');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublicForm()
    {
        $this->selectField('public_form');

        return $this;
    }

    public function selectStatuses(TableStatusesArgumentsObject $argsObject = null)
    {
        $object = new TableRecordStatusQueryObject('statuses');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummaryAttributes(TableSummaryAttributesArgumentsObject $argsObject = null)
    {
        $object = new SummaryAttributeQueryObject('summary_attributes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummaryOptions(TableSummaryOptionsArgumentsObject $argsObject = null)
    {
        $object = new SummaryGroupQueryObject('summary_options');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableFields(TableTableFieldsArgumentsObject $argsObject = null)
    {
        $object = new TableFieldQueryObject('table_fields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableRecords(TableTableRecordsArgumentsObject $argsObject = null)
    {
        $object = new TableRecordConnectionQueryObject('table_records');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableRecordsCount()
    {
        $this->selectField('table_records_count');

        return $this;
    }

    public function selectTitleField(TableTitleFieldArgumentsObject $argsObject = null)
    {
        $object = new TableFieldQueryObject('title_field');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }

    public function selectUsersCount()
    {
        $this->selectField('users_count');

        return $this;
    }

    public function selectUuid()
    {
        $this->selectField('uuid');

        return $this;
    }
}
