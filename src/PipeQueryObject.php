<?php

namespace GraphQL\SchemaObject;

class PipeQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Pipe';

    public function selectAnyoneCanCreateCard()
    {
        $this->selectField('anyone_can_create_card');

        return $this;
    }

    public function selectCardsCount()
    {
        $this->selectField('cards_count');

        return $this;
    }

    public function selectChildrenRelations(PipeChildrenRelationsArgumentsObject $argsObject = null)
    {
        $object = new PipeRelationQueryObject('childrenRelations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCloneFromId()
    {
        $this->selectField('clone_from_id');

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

    public function selectCreateCardLabel()
    {
        $this->selectField('create_card_label');

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');

        return $this;
    }

    public function selectEmailAddress()
    {
        $this->selectField('emailAddress');

        return $this;
    }

    public function selectExpirationTimeByUnit()
    {
        $this->selectField('expiration_time_by_unit');

        return $this;
    }

    public function selectExpirationUnit()
    {
        $this->selectField('expiration_unit');

        return $this;
    }

    public function selectFieldConditions(PipeFieldConditionsArgumentsObject $argsObject = null)
    {
        $object = new FieldConditionQueryObject('fieldConditions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectImprovementSetting(PipeImprovementSettingArgumentsObject $argsObject = null)
    {
        $object = new ImprovementSettingQueryObject('improvementSetting');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLabels(PipeLabelsArgumentsObject $argsObject = null)
    {
        $object = new LabelQueryObject('labels');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastUpdatedByCard()
    {
        $this->selectField('last_updated_by_card');

        return $this;
    }

    public function selectMembers(PipeMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberQueryObject('members');
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

    public function selectOnlyAdminCanRemoveCards()
    {
        $this->selectField('only_admin_can_remove_cards');

        return $this;
    }

    public function selectOnlyAssigneesCanEditCards()
    {
        $this->selectField('only_assignees_can_edit_cards');

        return $this;
    }

    public function selectOpenedCardsCount()
    {
        $this->selectField('opened_cards_count');

        return $this;
    }

    public function selectOrganization(PipeOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject('organization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentsRelations(PipeParentsRelationsArgumentsObject $argsObject = null)
    {
        $object = new PipeRelationQueryObject('parentsRelations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhases(PipePhasesArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject('phases');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreferences(PipePreferencesArgumentsObject $argsObject = null)
    {
        $object = new RepoPreferenceQueryObject('preferences');
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

    public function selectPublicFormSettings(PipePublicFormSettingsArgumentsObject $argsObject = null)
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

    public function selectRole()
    {
        $this->selectField('role');

        return $this;
    }

    public function selectStartFormFieldConditions(PipeStartFormFieldConditionsArgumentsObject $argsObject = null)
    {
        $object = new FieldConditionQueryObject('startFormFieldConditions');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStartFormFields(PipeStartFormFieldsArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('start_form_fields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtitleFields(PipeSubtitleFieldsArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldConnectionQueryObject('subtitleFields');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuid()
    {
        $this->selectField('suid');

        return $this;
    }

    public function selectSummaryAttributes(PipeSummaryAttributesArgumentsObject $argsObject = null)
    {
        $object = new SummaryAttributeQueryObject('summary_attributes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummaryOptions(PipeSummaryOptionsArgumentsObject $argsObject = null)
    {
        $object = new SummaryGroupQueryObject('summary_options');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitleField(PipeTitleFieldArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('title_field');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsers(PipeUsersArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject('users');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectWebhooks(PipeWebhooksArgumentsObject $argsObject = null)
    {
        $object = new WebhookQueryObject('webhooks');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
