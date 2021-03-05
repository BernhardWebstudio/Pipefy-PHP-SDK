<?php

namespace GraphQL\SchemaObject;

class RepoPreferenceQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'RepoPreference';

    public function selectHiddenStartFormAttributes()
    {
        $this->selectField('hiddenStartFormAttributes');

        return $this;
    }

    public function selectHiddenTopButtons()
    {
        $this->selectField('hiddenTopButtons');

        return $this;
    }

    public function selectInboxEmailEnabled()
    {
        $this->selectField('inboxEmailEnabled');

        return $this;
    }

    public function selectMainTabViews()
    {
        $this->selectField('mainTabViews');

        return $this;
    }

    public function selectStartFormTitle()
    {
        $this->selectField('startFormTitle');

        return $this;
    }
}
