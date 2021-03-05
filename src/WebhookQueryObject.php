<?php

namespace GraphQL\SchemaObject;

class WebhookQueryObject extends QueryObject
{
    public function selectActions(): static
    {
        $this->selectField('actions');

        return $this;
    }

    public function selectEmail(): static
    {
        $this->selectField('email');

        return $this;
    }

    public function selectHeaders(): static
    {
        $this->selectField('headers');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
