<?php

namespace GraphQL\SchemaObject;

class WebhookQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Webhook';

    public function selectActions()
    {
        $this->selectField('actions');

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField('email');

        return $this;
    }

    public function selectHeaders()
    {
        $this->selectField('headers');

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

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }
}
