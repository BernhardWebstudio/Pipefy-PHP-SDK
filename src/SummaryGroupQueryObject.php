<?php

namespace GraphQL\SchemaObject;

class SummaryGroupQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'SummaryGroup';

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOptions(SummaryGroupOptionsArgumentsObject $argsObject = null)
    {
        $object = new SummaryOptionQueryObject('options');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
