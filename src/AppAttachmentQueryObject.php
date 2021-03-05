<?php

namespace GraphQL\SchemaObject;

class AppAttachmentQueryObject extends QueryObject
{
    public function selectCardId(): static
    {
        $this->selectField('card_id');

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

    public function selectSuid(): static
    {
        $this->selectField('suid');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
