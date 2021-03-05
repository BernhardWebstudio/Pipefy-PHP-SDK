<?php

namespace GraphQL\SchemaObject;

class RepoPreferenceQueryObject extends QueryObject
{
    public function selectHiddenStartFormAttributes(): static
    {
        $this->selectField('hiddenStartFormAttributes');

        return $this;
    }

    public function selectHiddenTopButtons(): static
    {
        $this->selectField('hiddenTopButtons');

        return $this;
    }

    public function selectInboxEmailEnabled(): static
    {
        $this->selectField('inboxEmailEnabled');

        return $this;
    }

    public function selectMainTabViews(): static
    {
        $this->selectField('mainTabViews');

        return $this;
    }

    public function selectStartFormTitle(): static
    {
        $this->selectField('startFormTitle');

        return $this;
    }
}
