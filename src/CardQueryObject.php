<?php

namespace GraphQL\SchemaObject;

class CardQueryObject extends QueryObject
{
    public function selectAge(): static
    {
        $this->selectField('age');

        return $this;
    }

    public function selectAssignees(CardAssigneesArgumentsObject $cardAssigneesArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('assignees');
        if ($cardAssigneesArgumentsObject !== null) {
            $userQueryObject->appendArguments($cardAssigneesArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectAttachments(CardAttachmentsArgumentsObject $cardAttachmentsArgumentsObject = null): AttachmentQueryObject
    {
        $attachmentQueryObject = new AttachmentQueryObject('attachments');
        if ($cardAttachmentsArgumentsObject !== null) {
            $attachmentQueryObject->appendArguments($cardAttachmentsArgumentsObject->toArray());
        }
        $this->selectField($attachmentQueryObject);

        return $attachmentQueryObject;
    }

    public function selectAttachmentsCount(): static
    {
        $this->selectField('attachments_count');

        return $this;
    }

    public function selectCardAssignees(CardCardAssigneesArgumentsObject $cardCardAssigneesArgumentsObject = null): CardAssigneeQueryObject
    {
        $cardAssigneeQueryObject = new CardAssigneeQueryObject('cardAssignees');
        if ($cardCardAssigneesArgumentsObject !== null) {
            $cardAssigneeQueryObject->appendArguments($cardCardAssigneesArgumentsObject->toArray());
        }
        $this->selectField($cardAssigneeQueryObject);

        return $cardAssigneeQueryObject;
    }

    public function selectChecklistItemsCheckedCount(): static
    {
        $this->selectField('checklist_items_checked_count');

        return $this;
    }

    public function selectChecklistItemsCount(): static
    {
        $this->selectField('checklist_items_count');

        return $this;
    }

    public function selectChildRelations(CardChildRelationsArgumentsObject $cardChildRelationsArgumentsObject = null): CardRelationshipQueryObject
    {
        $cardRelationshipQueryObject = new CardRelationshipQueryObject('child_relations');
        if ($cardChildRelationsArgumentsObject !== null) {
            $cardRelationshipQueryObject->appendArguments($cardChildRelationsArgumentsObject->toArray());
        }
        $this->selectField($cardRelationshipQueryObject);

        return $cardRelationshipQueryObject;
    }

    public function selectComments(CardCommentsArgumentsObject $cardCommentsArgumentsObject = null): CommentQueryObject
    {
        $commentQueryObject = new CommentQueryObject('comments');
        if ($cardCommentsArgumentsObject !== null) {
            $commentQueryObject->appendArguments($cardCommentsArgumentsObject->toArray());
        }
        $this->selectField($commentQueryObject);

        return $commentQueryObject;
    }

    public function selectCommentsCount(): static
    {
        $this->selectField('comments_count');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(CardCreatedByArgumentsObject $cardCreatedByArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('createdBy');
        if ($cardCreatedByArgumentsObject !== null) {
            $userQueryObject->appendArguments($cardCreatedByArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectCreatorEmail(): static
    {
        $this->selectField('creatorEmail');

        return $this;
    }

    public function selectCurrentLateness(CardCurrentLatenessArgumentsObject $cardCurrentLatenessArgumentsObject = null): cardLatenessQueryObject
    {
        $cardLatenessQueryObject = new cardLatenessQueryObject('currentLateness');
        if ($cardCurrentLatenessArgumentsObject !== null) {
            $cardLatenessQueryObject->appendArguments($cardCurrentLatenessArgumentsObject->toArray());
        }
        $this->selectField($cardLatenessQueryObject);

        return $cardLatenessQueryObject;
    }

    public function selectCurrentPhase(CardCurrentPhaseArgumentsObject $cardCurrentPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('current_phase');
        if ($cardCurrentPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($cardCurrentPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectCurrentPhaseAge(): static
    {
        $this->selectField('current_phase_age');

        return $this;
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

    public function selectEmailMessagingAddress(): static
    {
        $this->selectField('emailMessagingAddress');

        return $this;
    }

    public function selectExpiration(CardExpirationArgumentsObject $cardExpirationArgumentsObject = null): CardExpirationQueryObject
    {
        $cardExpirationQueryObject = new CardExpirationQueryObject('expiration');
        if ($cardExpirationArgumentsObject !== null) {
            $cardExpirationQueryObject->appendArguments($cardExpirationArgumentsObject->toArray());
        }
        $this->selectField($cardExpirationQueryObject);

        return $cardExpirationQueryObject;
    }

    public function selectExpired(): static
    {
        $this->selectField('expired');

        return $this;
    }

    public function selectFields(CardFieldsArgumentsObject $cardFieldsArgumentsObject = null): CardFieldQueryObject
    {
        $cardFieldQueryObject = new CardFieldQueryObject('fields');
        if ($cardFieldsArgumentsObject !== null) {
            $cardFieldQueryObject->appendArguments($cardFieldsArgumentsObject->toArray());
        }
        $this->selectField($cardFieldQueryObject);

        return $cardFieldQueryObject;
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

    public function selectInboxEmails(CardInboxEmailsArgumentsObject $cardInboxEmailsArgumentsObject = null): InboxEmailQueryObject
    {
        $inboxEmailQueryObject = new InboxEmailQueryObject('inbox_emails');
        if ($cardInboxEmailsArgumentsObject !== null) {
            $inboxEmailQueryObject->appendArguments($cardInboxEmailsArgumentsObject->toArray());
        }
        $this->selectField($inboxEmailQueryObject);

        return $inboxEmailQueryObject;
    }

    public function selectLabels(CardLabelsArgumentsObject $cardLabelsArgumentsObject = null): LabelQueryObject
    {
        $labelQueryObject = new LabelQueryObject('labels');
        if ($cardLabelsArgumentsObject !== null) {
            $labelQueryObject->appendArguments($cardLabelsArgumentsObject->toArray());
        }
        $this->selectField($labelQueryObject);

        return $labelQueryObject;
    }

    public function selectLate(): static
    {
        $this->selectField('late');

        return $this;
    }

    public function selectParentRelations(CardParentRelationsArgumentsObject $cardParentRelationsArgumentsObject = null): CardRelationshipQueryObject
    {
        $cardRelationshipQueryObject = new CardRelationshipQueryObject('parent_relations');
        if ($cardParentRelationsArgumentsObject !== null) {
            $cardRelationshipQueryObject->appendArguments($cardParentRelationsArgumentsObject->toArray());
        }
        $this->selectField($cardRelationshipQueryObject);

        return $cardRelationshipQueryObject;
    }

    public function selectPath(): static
    {
        $this->selectField('path');

        return $this;
    }

    public function selectPhasesHistory(CardPhasesHistoryArgumentsObject $cardPhasesHistoryArgumentsObject = null): PhaseDetailQueryObject
    {
        $phaseDetailQueryObject = new PhaseDetailQueryObject('phases_history');
        if ($cardPhasesHistoryArgumentsObject !== null) {
            $phaseDetailQueryObject->appendArguments($cardPhasesHistoryArgumentsObject->toArray());
        }
        $this->selectField($phaseDetailQueryObject);

        return $phaseDetailQueryObject;
    }

    public function selectPipe(CardPipeArgumentsObject $cardPipeArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipe');
        if ($cardPipeArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($cardPipeArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectStartedCurrentPhaseAt(): static
    {
        $this->selectField('started_current_phase_at');

        return $this;
    }

    public function selectSubtitles(CardSubtitlesArgumentsObject $cardSubtitlesArgumentsObject = null): CardFieldQueryObject
    {
        $cardFieldQueryObject = new CardFieldQueryObject('subtitles');
        if ($cardSubtitlesArgumentsObject !== null) {
            $cardFieldQueryObject->appendArguments($cardSubtitlesArgumentsObject->toArray());
        }
        $this->selectField($cardFieldQueryObject);

        return $cardFieldQueryObject;
    }

    public function selectSuid(): static
    {
        $this->selectField('suid');

        return $this;
    }

    public function selectSummary(CardSummaryArgumentsObject $cardSummaryArgumentsObject = null): SummaryQueryObject
    {
        $summaryQueryObject = new SummaryQueryObject('summary');
        if ($cardSummaryArgumentsObject !== null) {
            $summaryQueryObject->appendArguments($cardSummaryArgumentsObject->toArray());
        }
        $this->selectField($summaryQueryObject);

        return $summaryQueryObject;
    }

    public function selectSummaryAttributes(CardSummaryAttributesArgumentsObject $cardSummaryAttributesArgumentsObject = null): SummaryQueryObject
    {
        $summaryQueryObject = new SummaryQueryObject('summary_attributes');
        if ($cardSummaryAttributesArgumentsObject !== null) {
            $summaryQueryObject->appendArguments($cardSummaryAttributesArgumentsObject->toArray());
        }
        $this->selectField($summaryQueryObject);

        return $summaryQueryObject;
    }

    public function selectSummaryFields(CardSummaryFieldsArgumentsObject $cardSummaryFieldsArgumentsObject = null): SummaryQueryObject
    {
        $summaryQueryObject = new SummaryQueryObject('summary_fields');
        if ($cardSummaryFieldsArgumentsObject !== null) {
            $summaryQueryObject->appendArguments($cardSummaryFieldsArgumentsObject->toArray());
        }
        $this->selectField($summaryQueryObject);

        return $summaryQueryObject;
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

    public function selectUuid(): static
    {
        $this->selectField('uuid');

        return $this;
    }
}
