<?php

namespace GraphQL\SchemaObject;

class TableRecordQueryObject extends QueryObject
{
    const OBJECT_NAME = "TableRecord";

    public function selectAssignees(TableRecordAssigneesArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("assignees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectCreatedBy(TableRecordCreatedByArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("created_by");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDone()
    {
        $this->selectField("done");

        return $this;
    }

    public function selectDueDate()
    {
        $this->selectField("due_date");

        return $this;
    }

    public function selectFinishedAt()
    {
        $this->selectField("finished_at");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLabels(TableRecordLabelsArgumentsObject $argsObject = null)
    {
        $object = new LabelQueryObject("labels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentRelations(TableRecordParentRelationsArgumentsObject $argsObject = null)
    {
        $object = new TableRecordRelationQueryObject("parent_relations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPath()
    {
        $this->selectField("path");

        return $this;
    }

    public function selectRecordFields(TableRecordRecordFieldsArgumentsObject $argsObject = null)
    {
        $object = new TableRecordFieldQueryObject("record_fields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus(TableRecordStatusArgumentsObject $argsObject = null)
    {
        $object = new TableRecordStatusQueryObject("status");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummary(TableRecordSummaryArgumentsObject $argsObject = null)
    {
        $object = new SummaryQueryObject("summary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTable(TableRecordTableArgumentsObject $argsObject = null)
    {
        $object = new TableQueryObject("table");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updated_at");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
