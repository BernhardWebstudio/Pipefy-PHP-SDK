<?php

namespace GraphQL\SchemaObject;

class PipeTemplateQueryObject extends QueryObject
{
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

    public function selectImage(): static
    {
        $this->selectField('image');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }
}
