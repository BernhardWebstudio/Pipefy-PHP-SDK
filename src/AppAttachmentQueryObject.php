<?php

namespace GraphQL\SchemaObject;

class AppAttachmentQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'AppAttachment';

    public function selectCardId()
    {
        $this->selectField('card_id');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectSuid()
    {
        $this->selectField('suid');

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }
}
