<?php

namespace GraphQL\SchemaObject;

class CardQueryObject extends QueryObject
{
    const OBJECT_NAME = "Card";

    public function selectAge()
    {
        $this->selectField("age");

        return $this;
    }

    public function selectAssignees(CardAssigneesArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("assignees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAttachments(CardAttachmentsArgumentsObject $argsObject = null)
    {
        $object = new AttachmentQueryObject("attachments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAttachmentsCount()
    {
        $this->selectField("attachments_count");

        return $this;
    }

    public function selectCardAssignees(CardCardAssigneesArgumentsObject $argsObject = null)
    {
        $object = new CardAssigneeQueryObject("cardAssignees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChecklistItemsCheckedCount()
    {
        $this->selectField("checklist_items_checked_count");

        return $this;
    }

    public function selectChecklistItemsCount()
    {
        $this->selectField("checklist_items_count");

        return $this;
    }

    public function selectChildRelations(CardChildRelationsArgumentsObject $argsObject = null)
    {
        $object = new CardRelationshipQueryObject("child_relations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComments(CardCommentsArgumentsObject $argsObject = null)
    {
        $object = new CommentQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCommentsCount()
    {
        $this->selectField("comments_count");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCreatedBy(CardCreatedByArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatorEmail()
    {
        $this->selectField("creatorEmail");

        return $this;
    }

    public function selectCurrentLateness(CardCurrentLatenessArgumentsObject $argsObject = null)
    {
        $object = new cardLatenessQueryObject("currentLateness");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentPhase(CardCurrentPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject("current_phase");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentPhaseAge()
    {
        $this->selectField("current_phase_age");

        return $this;
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

    public function selectEmailMessagingAddress()
    {
        $this->selectField("emailMessagingAddress");

        return $this;
    }

    public function selectExpiration(CardExpirationArgumentsObject $argsObject = null)
    {
        $object = new CardExpirationQueryObject("expiration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpired()
    {
        $this->selectField("expired");

        return $this;
    }

    public function selectFields(CardFieldsArgumentsObject $argsObject = null)
    {
        $object = new CardFieldQueryObject("fields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectInboxEmails(CardInboxEmailsArgumentsObject $argsObject = null)
    {
        $object = new InboxEmailQueryObject("inbox_emails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLabels(CardLabelsArgumentsObject $argsObject = null)
    {
        $object = new LabelQueryObject("labels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLate()
    {
        $this->selectField("late");

        return $this;
    }

    public function selectParentRelations(CardParentRelationsArgumentsObject $argsObject = null)
    {
        $object = new CardRelationshipQueryObject("parent_relations");
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

    public function selectPhasesHistory(CardPhasesHistoryArgumentsObject $argsObject = null)
    {
        $object = new PhaseDetailQueryObject("phases_history");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPipe(CardPipeArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject("pipe");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStartedCurrentPhaseAt()
    {
        $this->selectField("started_current_phase_at");

        return $this;
    }

    public function selectSubtitles(CardSubtitlesArgumentsObject $argsObject = null)
    {
        $object = new CardFieldQueryObject("subtitles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuid()
    {
        $this->selectField("suid");

        return $this;
    }

    public function selectSummary(CardSummaryArgumentsObject $argsObject = null)
    {
        $object = new SummaryQueryObject("summary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummaryAttributes(CardSummaryAttributesArgumentsObject $argsObject = null)
    {
        $object = new SummaryQueryObject("summary_attributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummaryFields(CardSummaryFieldsArgumentsObject $argsObject = null)
    {
        $object = new SummaryQueryObject("summary_fields");
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

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }
}
