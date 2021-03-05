<?php

namespace GraphQL\SchemaObject;

class LabelQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Label';

    public function selectColor()
    {
        $this->selectField('color');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }
}
