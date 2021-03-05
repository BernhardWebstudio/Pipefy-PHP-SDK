<?php

namespace GraphQL\SchemaObject;

class PipeQueryObject extends QueryObject
{
    public function selectAnyoneCanCreateCard(): static
    {
        $this->selectField('anyone_can_create_card');

        return $this;
    }

    public function selectCardsCount(): static
    {
        $this->selectField('cards_count');

        return $this;
    }

    public function selectChildrenRelations(PipeChildrenRelationsArgumentsObject $pipeChildrenRelationsArgumentsObject = null): PipeRelationQueryObject
    {
        $pipeRelationQueryObject = new PipeRelationQueryObject('childrenRelations');
        if ($pipeChildrenRelationsArgumentsObject !== null) {
            $pipeRelationQueryObject->appendArguments($pipeChildrenRelationsArgumentsObject->toArray());
        }
        $this->selectField($pipeRelationQueryObject);

        return $pipeRelationQueryObject;
    }

    public function selectCloneFromId(): static
    {
        $this->selectField('clone_from_id');

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

    public function selectCreateCardLabel(): static
    {
        $this->selectField('create_card_label');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectEmailAddress(): static
    {
        $this->selectField('emailAddress');

        return $this;
    }

    public function selectExpirationTimeByUnit(): static
    {
        $this->selectField('expiration_time_by_unit');

        return $this;
    }

    public function selectExpirationUnit(): static
    {
        $this->selectField('expiration_unit');

        return $this;
    }

    public function selectFieldConditions(PipeFieldConditionsArgumentsObject $pipeFieldConditionsArgumentsObject = null): FieldConditionQueryObject
    {
        $fieldConditionQueryObject = new FieldConditionQueryObject('fieldConditions');
        if ($pipeFieldConditionsArgumentsObject !== null) {
            $fieldConditionQueryObject->appendArguments($pipeFieldConditionsArgumentsObject->toArray());
        }
        $this->selectField($fieldConditionQueryObject);

        return $fieldConditionQueryObject;
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

    public function selectImprovementSetting(PipeImprovementSettingArgumentsObject $pipeImprovementSettingArgumentsObject = null): ImprovementSettingQueryObject
    {
        $improvementSettingQueryObject = new ImprovementSettingQueryObject('improvementSetting');
        if ($pipeImprovementSettingArgumentsObject !== null) {
            $improvementSettingQueryObject->appendArguments($pipeImprovementSettingArgumentsObject->toArray());
        }
        $this->selectField($improvementSettingQueryObject);

        return $improvementSettingQueryObject;
    }

    public function selectLabels(PipeLabelsArgumentsObject $pipeLabelsArgumentsObject = null): LabelQueryObject
    {
        $labelQueryObject = new LabelQueryObject('labels');
        if ($pipeLabelsArgumentsObject !== null) {
            $labelQueryObject->appendArguments($pipeLabelsArgumentsObject->toArray());
        }
        $this->selectField($labelQueryObject);

        return $labelQueryObject;
    }

    public function selectLastUpdatedByCard(): static
    {
        $this->selectField('last_updated_by_card');

        return $this;
    }

    public function selectMembers(PipeMembersArgumentsObject $pipeMembersArgumentsObject = null): MemberQueryObject
    {
        $memberQueryObject = new MemberQueryObject('members');
        if ($pipeMembersArgumentsObject !== null) {
            $memberQueryObject->appendArguments($pipeMembersArgumentsObject->toArray());
        }
        $this->selectField($memberQueryObject);

        return $memberQueryObject;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOnlyAdminCanRemoveCards(): static
    {
        $this->selectField('only_admin_can_remove_cards');

        return $this;
    }

    public function selectOnlyAssigneesCanEditCards(): static
    {
        $this->selectField('only_assignees_can_edit_cards');

        return $this;
    }

    public function selectOpenedCardsCount(): static
    {
        $this->selectField('opened_cards_count');

        return $this;
    }

    public function selectOrganization(PipeOrganizationArgumentsObject $pipeOrganizationArgumentsObject = null): OrganizationQueryObject
    {
        $organizationQueryObject = new OrganizationQueryObject('organization');
        if ($pipeOrganizationArgumentsObject !== null) {
            $organizationQueryObject->appendArguments($pipeOrganizationArgumentsObject->toArray());
        }
        $this->selectField($organizationQueryObject);

        return $organizationQueryObject;
    }

    public function selectParentsRelations(PipeParentsRelationsArgumentsObject $pipeParentsRelationsArgumentsObject = null): PipeRelationQueryObject
    {
        $pipeRelationQueryObject = new PipeRelationQueryObject('parentsRelations');
        if ($pipeParentsRelationsArgumentsObject !== null) {
            $pipeRelationQueryObject->appendArguments($pipeParentsRelationsArgumentsObject->toArray());
        }
        $this->selectField($pipeRelationQueryObject);

        return $pipeRelationQueryObject;
    }

    public function selectPhases(PipePhasesArgumentsObject $pipePhasesArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phases');
        if ($pipePhasesArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($pipePhasesArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectPreferences(PipePreferencesArgumentsObject $pipePreferencesArgumentsObject = null): RepoPreferenceQueryObject
    {
        $repoPreferenceQueryObject = new RepoPreferenceQueryObject('preferences');
        if ($pipePreferencesArgumentsObject !== null) {
            $repoPreferenceQueryObject->appendArguments($pipePreferencesArgumentsObject->toArray());
        }
        $this->selectField($repoPreferenceQueryObject);

        return $repoPreferenceQueryObject;
    }

    public function selectPublic(): static
    {
        $this->selectField('public');

        return $this;
    }

    public function selectPublicFormSettings(PipePublicFormSettingsArgumentsObject $pipePublicFormSettingsArgumentsObject = null): PublicFormSettingsQueryObject
    {
        $publicFormSettingsQueryObject = new PublicFormSettingsQueryObject('publicFormSettings');
        if ($pipePublicFormSettingsArgumentsObject !== null) {
            $publicFormSettingsQueryObject->appendArguments($pipePublicFormSettingsArgumentsObject->toArray());
        }
        $this->selectField($publicFormSettingsQueryObject);

        return $publicFormSettingsQueryObject;
    }

    public function selectPublicForm(): static
    {
        $this->selectField('public_form');

        return $this;
    }

    public function selectRole(): static
    {
        $this->selectField('role');

        return $this;
    }

    public function selectStartFormFieldConditions(PipeStartFormFieldConditionsArgumentsObject $pipeStartFormFieldConditionsArgumentsObject = null): FieldConditionQueryObject
    {
        $fieldConditionQueryObject = new FieldConditionQueryObject('startFormFieldConditions');
        if ($pipeStartFormFieldConditionsArgumentsObject !== null) {
            $fieldConditionQueryObject->appendArguments($pipeStartFormFieldConditionsArgumentsObject->toArray());
        }
        $this->selectField($fieldConditionQueryObject);

        return $fieldConditionQueryObject;
    }

    public function selectStartFormFields(PipeStartFormFieldsArgumentsObject $pipeStartFormFieldsArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('start_form_fields');
        if ($pipeStartFormFieldsArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($pipeStartFormFieldsArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    public function selectSubtitleFields(PipeSubtitleFieldsArgumentsObject $pipeSubtitleFieldsArgumentsObject = null): PhaseFieldConnectionQueryObject
    {
        $phaseFieldConnectionQueryObject = new PhaseFieldConnectionQueryObject('subtitleFields');
        if ($pipeSubtitleFieldsArgumentsObject !== null) {
            $phaseFieldConnectionQueryObject->appendArguments($pipeSubtitleFieldsArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldConnectionQueryObject);

        return $phaseFieldConnectionQueryObject;
    }

    public function selectSuid(): static
    {
        $this->selectField('suid');

        return $this;
    }

    public function selectSummaryAttributes(PipeSummaryAttributesArgumentsObject $pipeSummaryAttributesArgumentsObject = null): SummaryAttributeQueryObject
    {
        $summaryAttributeQueryObject = new SummaryAttributeQueryObject('summary_attributes');
        if ($pipeSummaryAttributesArgumentsObject !== null) {
            $summaryAttributeQueryObject->appendArguments($pipeSummaryAttributesArgumentsObject->toArray());
        }
        $this->selectField($summaryAttributeQueryObject);

        return $summaryAttributeQueryObject;
    }

    public function selectSummaryOptions(PipeSummaryOptionsArgumentsObject $pipeSummaryOptionsArgumentsObject = null): SummaryGroupQueryObject
    {
        $summaryGroupQueryObject = new SummaryGroupQueryObject('summary_options');
        if ($pipeSummaryOptionsArgumentsObject !== null) {
            $summaryGroupQueryObject->appendArguments($pipeSummaryOptionsArgumentsObject->toArray());
        }
        $this->selectField($summaryGroupQueryObject);

        return $summaryGroupQueryObject;
    }

    public function selectTitleField(PipeTitleFieldArgumentsObject $pipeTitleFieldArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('title_field');
        if ($pipeTitleFieldArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($pipeTitleFieldArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }

    public function selectUsers(PipeUsersArgumentsObject $pipeUsersArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('users');
        if ($pipeUsersArgumentsObject !== null) {
            $userQueryObject->appendArguments($pipeUsersArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
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

    public function selectWebhooks(PipeWebhooksArgumentsObject $pipeWebhooksArgumentsObject = null): WebhookQueryObject
    {
        $webhookQueryObject = new WebhookQueryObject('webhooks');
        if ($pipeWebhooksArgumentsObject !== null) {
            $webhookQueryObject->appendArguments($pipeWebhooksArgumentsObject->toArray());
        }
        $this->selectField($webhookQueryObject);

        return $webhookQueryObject;
    }
}
