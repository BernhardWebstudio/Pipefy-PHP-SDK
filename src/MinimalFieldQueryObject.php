<?php

namespace GraphQL\SchemaObject;

class MinimalFieldQueryObject extends QueryObject
{
    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectHelp(): static
    {
        $this->selectField('help');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectIndexName(): static
    {
        $this->selectField('index_name');

        return $this;
    }

    public function selectInternalId(): static
    {
        $this->selectField('internal_id');

        return $this;
    }

    public function selectLabel(): static
    {
        $this->selectField('label');

        return $this;
    }

    public function selectOptions(): static
    {
        $this->selectField('options');

        return $this;
    }

    public function selectType(): static
    {
        $this->selectField('type');

        return $this;
    }

    public function selectUuid(): static
    {
        $this->selectField('uuid');

        return $this;
    }
}
