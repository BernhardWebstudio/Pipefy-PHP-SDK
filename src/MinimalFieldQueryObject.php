<?php

namespace GraphQL\SchemaObject;

class MinimalFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "MinimalField";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectHelp()
    {
        $this->selectField("help");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIndexName()
    {
        $this->selectField("index_name");

        return $this;
    }

    public function selectInternalId()
    {
        $this->selectField("internal_id");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectOptions()
    {
        $this->selectField("options");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }
}
