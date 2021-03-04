<?php

namespace GraphQL\SchemaObject;

class InboxEmailQueryObject extends QueryObject
{
    const OBJECT_NAME = "InboxEmail";

    public function selectAttachments(InboxEmailAttachmentsArgumentsObject $argsObject = null)
    {
        $object = new EmailAttachmentQueryObject("attachments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBcc()
    {
        $this->selectField("bcc");

        return $this;
    }

    public function selectBody()
    {
        $this->selectField("body");

        return $this;
    }

    public function selectCard(InboxEmailCardArgumentsObject $argsObject = null)
    {
        $object = new CardQueryObject("card");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCc()
    {
        $this->selectField("cc");

        return $this;
    }

    public function selectCleanBody()
    {
        $this->selectField("clean_body");

        return $this;
    }

    public function selectCleanHtml()
    {
        $this->selectField("clean_html");

        return $this;
    }

    public function selectCleanText()
    {
        $this->selectField("clean_text");

        return $this;
    }

    public function selectFrom()
    {
        $this->selectField("from");

        return $this;
    }

    public function selectFromName()
    {
        $this->selectField("fromName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMainTo()
    {
        $this->selectField("main_to");

        return $this;
    }

    public function selectMessageId()
    {
        $this->selectField("message_id");

        return $this;
    }

    public function selectPipe(InboxEmailPipeArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject("pipe");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRawBody()
    {
        $this->selectField("raw_body");

        return $this;
    }

    public function selectRawHeaders()
    {
        $this->selectField("raw_headers");

        return $this;
    }

    public function selectRawHtml()
    {
        $this->selectField("raw_html");

        return $this;
    }

    public function selectRawText()
    {
        $this->selectField("raw_text");

        return $this;
    }

    public function selectSentViaAutomation()
    {
        $this->selectField("sent_via_automation");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectSubject()
    {
        $this->selectField("subject");

        return $this;
    }

    public function selectTo()
    {
        $this->selectField("to");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updated_at");

        return $this;
    }

    public function selectUser(InboxEmailUserArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
