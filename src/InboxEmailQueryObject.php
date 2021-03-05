<?php

namespace GraphQL\SchemaObject;

class InboxEmailQueryObject extends QueryObject
{
    public function selectAttachments(InboxEmailAttachmentsArgumentsObject $inboxEmailAttachmentsArgumentsObject = null): EmailAttachmentQueryObject
    {
        $emailAttachmentQueryObject = new EmailAttachmentQueryObject('attachments');
        if ($inboxEmailAttachmentsArgumentsObject !== null) {
            $emailAttachmentQueryObject->appendArguments($inboxEmailAttachmentsArgumentsObject->toArray());
        }
        $this->selectField($emailAttachmentQueryObject);

        return $emailAttachmentQueryObject;
    }

    public function selectBcc(): static
    {
        $this->selectField('bcc');

        return $this;
    }

    public function selectBody(): static
    {
        $this->selectField('body');

        return $this;
    }

    public function selectCard(InboxEmailCardArgumentsObject $inboxEmailCardArgumentsObject = null): CardQueryObject
    {
        $cardQueryObject = new CardQueryObject('card');
        if ($inboxEmailCardArgumentsObject !== null) {
            $cardQueryObject->appendArguments($inboxEmailCardArgumentsObject->toArray());
        }
        $this->selectField($cardQueryObject);

        return $cardQueryObject;
    }

    public function selectCc(): static
    {
        $this->selectField('cc');

        return $this;
    }

    public function selectCleanBody(): static
    {
        $this->selectField('clean_body');

        return $this;
    }

    public function selectCleanHtml(): static
    {
        $this->selectField('clean_html');

        return $this;
    }

    public function selectCleanText(): static
    {
        $this->selectField('clean_text');

        return $this;
    }

    public function selectFrom(): static
    {
        $this->selectField('from');

        return $this;
    }

    public function selectFromName(): static
    {
        $this->selectField('fromName');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectMainTo(): static
    {
        $this->selectField('main_to');

        return $this;
    }

    public function selectMessageId(): static
    {
        $this->selectField('message_id');

        return $this;
    }

    public function selectPipe(InboxEmailPipeArgumentsObject $inboxEmailPipeArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipe');
        if ($inboxEmailPipeArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($inboxEmailPipeArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectRawBody(): static
    {
        $this->selectField('raw_body');

        return $this;
    }

    public function selectRawHeaders(): static
    {
        $this->selectField('raw_headers');

        return $this;
    }

    public function selectRawHtml(): static
    {
        $this->selectField('raw_html');

        return $this;
    }

    public function selectRawText(): static
    {
        $this->selectField('raw_text');

        return $this;
    }

    public function selectSentViaAutomation(): static
    {
        $this->selectField('sent_via_automation');

        return $this;
    }

    public function selectState(): static
    {
        $this->selectField('state');

        return $this;
    }

    public function selectSubject(): static
    {
        $this->selectField('subject');

        return $this;
    }

    public function selectTo(): static
    {
        $this->selectField('to');

        return $this;
    }

    public function selectUpdatedAt(): static
    {
        $this->selectField('updated_at');

        return $this;
    }

    public function selectUser(InboxEmailUserArgumentsObject $inboxEmailUserArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('user');
        if ($inboxEmailUserArgumentsObject !== null) {
            $userQueryObject->appendArguments($inboxEmailUserArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }
}
