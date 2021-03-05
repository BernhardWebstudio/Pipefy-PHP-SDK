<?php

namespace GraphQL\SchemaObject;

class RootQueryObject extends QueryObject
{
    public const OBJECT_NAME = '';

    public function selectAllCards(RootAllCardsArgumentsObject $argsObject = null)
    {
        $object = new CardConnectionQueryObject('allCards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCard(RootCardArgumentsObject $argsObject = null)
    {
        $object = new CardQueryObject('card');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCards(RootCardsArgumentsObject $argsObject = null)
    {
        $object = new CardConnectionQueryObject('cards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCardsImportations(RootCardsImportationsArgumentsObject $argsObject = null)
    {
        $object = new CardsImportationQueryObject('cardsImportations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConditionalField(RootConditionalFieldArgumentsObject $argsObject = null)
    {
        $object = new ConditionalFieldQueryObject('conditionalField');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConnectedTableRecords(RootConnectedTableRecordsArgumentsObject $argsObject = null)
    {
        $object = new PublicTableRecordConnectionQueryObject('connectedTableRecords');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFieldCondition(RootFieldConditionArgumentsObject $argsObject = null)
    {
        $object = new FieldConditionQueryObject('fieldCondition');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInboxEmails(RootInboxEmailsArgumentsObject $argsObject = null)
    {
        $object = new InboxEmailQueryObject('inbox_emails');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMe(RootMeArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject('me');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrganization(RootOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject('organization');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrganizations(RootOrganizationsArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject('organizations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhase(RootPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject('phase');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPipe(RootPipeArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject('pipe');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPipeRelations(RootPipeRelationsArgumentsObject $argsObject = null)
    {
        $object = new PipeRelationQueryObject('pipe_relations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPipeTemplates(RootPipeTemplatesArgumentsObject $argsObject = null)
    {
        $object = new PipeTemplateQueryObject('pipe_templates');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPipes(RootPipesArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject('pipes');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRecordsImportations(RootRecordsImportationsArgumentsObject $argsObject = null)
    {
        $object = new RecordsImportationQueryObject('recordsImportations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTable(RootTableArgumentsObject $argsObject = null)
    {
        $object = new TableQueryObject('table');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableRecord(RootTableRecordArgumentsObject $argsObject = null)
    {
        $object = new TableRecordQueryObject('table_record');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableRecords(RootTableRecordsArgumentsObject $argsObject = null)
    {
        $object = new TableRecordWithCountConnectionQueryObject('table_records');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTableRelations(RootTableRelationsArgumentsObject $argsObject = null)
    {
        $object = new TableRelationQueryObject('table_relations');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTables(RootTablesArgumentsObject $argsObject = null)
    {
        $object = new TableQueryObject('tables');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
