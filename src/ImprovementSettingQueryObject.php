<?php

namespace GraphQL\SchemaObject;

class ImprovementSettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ImprovementSetting";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImprovements(ImprovementSettingImprovementsArgumentsObject $argsObject = null)
    {
        $object = new ImprovementQueryObject("improvements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
