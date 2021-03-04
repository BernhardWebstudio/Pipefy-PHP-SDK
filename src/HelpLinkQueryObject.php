<?php

namespace GraphQL\SchemaObject;

class HelpLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "HelpLink";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectIcon()
    {
        $this->selectField("icon");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectNewTab()
    {
        $this->selectField("newTab");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
