<?php

namespace GraphQL\SchemaObject;

class HelpLinkQueryObject extends QueryObject
{
    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectIcon(): static
    {
        $this->selectField('icon');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectNewTab(): static
    {
        $this->selectField('newTab');

        return $this;
    }

    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
