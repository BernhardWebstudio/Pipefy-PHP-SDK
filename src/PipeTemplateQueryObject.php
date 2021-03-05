<?php

namespace GraphQL\SchemaObject;

class PipeTemplateQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PipeTemplate';

    public function selectIcon()
    {
        $this->selectField('icon');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectImage()
    {
        $this->selectField('image');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }
}
