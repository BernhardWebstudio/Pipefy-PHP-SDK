<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PublicTableRecord';

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPath()
    {
        $this->selectField('path');

        return $this;
    }

    public function selectSummary(PublicTableRecordSummaryArgumentsObject $argsObject = null)
    {
        $object = new SummaryQueryObject('summary');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField('title');

        return $this;
    }
}
