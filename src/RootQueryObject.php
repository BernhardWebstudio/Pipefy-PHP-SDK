<?php

namespace GraphQL\SchemaObject;

class RootQueryObject extends QueryObject
{
    public function selectAllCards(RootAllCardsArgumentsObject $rootAllCardsArgumentsObject = null): CardConnectionQueryObject
    {
        $cardConnectionQueryObject = new CardConnectionQueryObject('allCards');
        if ($rootAllCardsArgumentsObject !== null) {
            $cardConnectionQueryObject->appendArguments($rootAllCardsArgumentsObject->toArray());
        }
        $this->selectField($cardConnectionQueryObject);

        return $cardConnectionQueryObject;
    }

    public function selectCard(RootCardArgumentsObject $rootCardArgumentsObject = null): CardQueryObject
    {
        $cardQueryObject = new CardQueryObject('card');
        if ($rootCardArgumentsObject !== null) {
            $cardQueryObject->appendArguments($rootCardArgumentsObject->toArray());
        }
        $this->selectField($cardQueryObject);

        return $cardQueryObject;
    }

    public function selectCards(RootCardsArgumentsObject $rootCardsArgumentsObject = null): CardConnectionQueryObject
    {
        $cardConnectionQueryObject = new CardConnectionQueryObject('cards');
        if ($rootCardsArgumentsObject !== null) {
            $cardConnectionQueryObject->appendArguments($rootCardsArgumentsObject->toArray());
        }
        $this->selectField($cardConnectionQueryObject);

        return $cardConnectionQueryObject;
    }

    public function selectCardsImportations(RootCardsImportationsArgumentsObject $rootCardsImportationsArgumentsObject = null): CardsImportationQueryObject
    {
        $cardsImportationQueryObject = new CardsImportationQueryObject('cardsImportations');
        if ($rootCardsImportationsArgumentsObject !== null) {
            $cardsImportationQueryObject->appendArguments($rootCardsImportationsArgumentsObject->toArray());
        }
        $this->selectField($cardsImportationQueryObject);

        return $cardsImportationQueryObject;
    }

    public function selectConditionalField(RootConditionalFieldArgumentsObject $rootConditionalFieldArgumentsObject = null): ConditionalFieldQueryObject
    {
        $conditionalFieldQueryObject = new ConditionalFieldQueryObject('conditionalField');
        if ($rootConditionalFieldArgumentsObject !== null) {
            $conditionalFieldQueryObject->appendArguments($rootConditionalFieldArgumentsObject->toArray());
        }
        $this->selectField($conditionalFieldQueryObject);

        return $conditionalFieldQueryObject;
    }

    public function selectConnectedTableRecords(RootConnectedTableRecordsArgumentsObject $rootConnectedTableRecordsArgumentsObject = null): PublicTableRecordConnectionQueryObject
    {
        $publicTableRecordConnectionQueryObject = new PublicTableRecordConnectionQueryObject('connectedTableRecords');
        if ($rootConnectedTableRecordsArgumentsObject !== null) {
            $publicTableRecordConnectionQueryObject->appendArguments($rootConnectedTableRecordsArgumentsObject->toArray());
        }
        $this->selectField($publicTableRecordConnectionQueryObject);

        return $publicTableRecordConnectionQueryObject;
    }

    public function selectFieldCondition(RootFieldConditionArgumentsObject $rootFieldConditionArgumentsObject = null): FieldConditionQueryObject
    {
        $fieldConditionQueryObject = new FieldConditionQueryObject('fieldCondition');
        if ($rootFieldConditionArgumentsObject !== null) {
            $fieldConditionQueryObject->appendArguments($rootFieldConditionArgumentsObject->toArray());
        }
        $this->selectField($fieldConditionQueryObject);

        return $fieldConditionQueryObject;
    }

    public function selectInboxEmails(RootInboxEmailsArgumentsObject $rootInboxEmailsArgumentsObject = null): InboxEmailQueryObject
    {
        $inboxEmailQueryObject = new InboxEmailQueryObject('inbox_emails');
        if ($rootInboxEmailsArgumentsObject !== null) {
            $inboxEmailQueryObject->appendArguments($rootInboxEmailsArgumentsObject->toArray());
        }
        $this->selectField($inboxEmailQueryObject);

        return $inboxEmailQueryObject;
    }

    public function selectMe(RootMeArgumentsObject $rootMeArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('me');
        if ($rootMeArgumentsObject !== null) {
            $userQueryObject->appendArguments($rootMeArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectOrganization(RootOrganizationArgumentsObject $rootOrganizationArgumentsObject = null): OrganizationQueryObject
    {
        $organizationQueryObject = new OrganizationQueryObject('organization');
        if ($rootOrganizationArgumentsObject !== null) {
            $organizationQueryObject->appendArguments($rootOrganizationArgumentsObject->toArray());
        }
        $this->selectField($organizationQueryObject);

        return $organizationQueryObject;
    }

    public function selectOrganizations(RootOrganizationsArgumentsObject $rootOrganizationsArgumentsObject = null): OrganizationQueryObject
    {
        $organizationQueryObject = new OrganizationQueryObject('organizations');
        if ($rootOrganizationsArgumentsObject !== null) {
            $organizationQueryObject->appendArguments($rootOrganizationsArgumentsObject->toArray());
        }
        $this->selectField($organizationQueryObject);

        return $organizationQueryObject;
    }

    public function selectPhase(RootPhaseArgumentsObject $rootPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($rootPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($rootPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectPipe(RootPipeArgumentsObject $rootPipeArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipe');
        if ($rootPipeArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($rootPipeArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectPipeRelations(RootPipeRelationsArgumentsObject $rootPipeRelationsArgumentsObject = null): PipeRelationQueryObject
    {
        $pipeRelationQueryObject = new PipeRelationQueryObject('pipe_relations');
        if ($rootPipeRelationsArgumentsObject !== null) {
            $pipeRelationQueryObject->appendArguments($rootPipeRelationsArgumentsObject->toArray());
        }
        $this->selectField($pipeRelationQueryObject);

        return $pipeRelationQueryObject;
    }

    public function selectPipeTemplates(RootPipeTemplatesArgumentsObject $rootPipeTemplatesArgumentsObject = null): PipeTemplateQueryObject
    {
        $pipeTemplateQueryObject = new PipeTemplateQueryObject('pipe_templates');
        if ($rootPipeTemplatesArgumentsObject !== null) {
            $pipeTemplateQueryObject->appendArguments($rootPipeTemplatesArgumentsObject->toArray());
        }
        $this->selectField($pipeTemplateQueryObject);

        return $pipeTemplateQueryObject;
    }

    public function selectPipes(RootPipesArgumentsObject $rootPipesArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipes');
        if ($rootPipesArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($rootPipesArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectRecordsImportations(RootRecordsImportationsArgumentsObject $rootRecordsImportationsArgumentsObject = null): RecordsImportationQueryObject
    {
        $recordsImportationQueryObject = new RecordsImportationQueryObject('recordsImportations');
        if ($rootRecordsImportationsArgumentsObject !== null) {
            $recordsImportationQueryObject->appendArguments($rootRecordsImportationsArgumentsObject->toArray());
        }
        $this->selectField($recordsImportationQueryObject);

        return $recordsImportationQueryObject;
    }

    public function selectTable(RootTableArgumentsObject $rootTableArgumentsObject = null): TableQueryObject
    {
        $tableQueryObject = new TableQueryObject('table');
        if ($rootTableArgumentsObject !== null) {
            $tableQueryObject->appendArguments($rootTableArgumentsObject->toArray());
        }
        $this->selectField($tableQueryObject);

        return $tableQueryObject;
    }

    public function selectTableRecord(RootTableRecordArgumentsObject $rootTableRecordArgumentsObject = null): TableRecordQueryObject
    {
        $tableRecordQueryObject = new TableRecordQueryObject('table_record');
        if ($rootTableRecordArgumentsObject !== null) {
            $tableRecordQueryObject->appendArguments($rootTableRecordArgumentsObject->toArray());
        }
        $this->selectField($tableRecordQueryObject);

        return $tableRecordQueryObject;
    }

    public function selectTableRecords(RootTableRecordsArgumentsObject $rootTableRecordsArgumentsObject = null): TableRecordWithCountConnectionQueryObject
    {
        $tableRecordWithCountConnectionQueryObject = new TableRecordWithCountConnectionQueryObject('table_records');
        if ($rootTableRecordsArgumentsObject !== null) {
            $tableRecordWithCountConnectionQueryObject->appendArguments($rootTableRecordsArgumentsObject->toArray());
        }
        $this->selectField($tableRecordWithCountConnectionQueryObject);

        return $tableRecordWithCountConnectionQueryObject;
    }

    public function selectTableRelations(RootTableRelationsArgumentsObject $rootTableRelationsArgumentsObject = null): TableRelationQueryObject
    {
        $tableRelationQueryObject = new TableRelationQueryObject('table_relations');
        if ($rootTableRelationsArgumentsObject !== null) {
            $tableRelationQueryObject->appendArguments($rootTableRelationsArgumentsObject->toArray());
        }
        $this->selectField($tableRelationQueryObject);

        return $tableRelationQueryObject;
    }

    public function selectTables(RootTablesArgumentsObject $rootTablesArgumentsObject = null): TableQueryObject
    {
        $tableQueryObject = new TableQueryObject('tables');
        if ($rootTablesArgumentsObject !== null) {
            $tableQueryObject->appendArguments($rootTablesArgumentsObject->toArray());
        }
        $this->selectField($tableQueryObject);

        return $tableQueryObject;
    }
}
