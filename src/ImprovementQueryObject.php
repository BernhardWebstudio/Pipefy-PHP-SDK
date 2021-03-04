<?php

namespace GraphQL\SchemaObject;

class ImprovementQueryObject extends QueryObject
{
    const OBJECT_NAME = "Improvement";

    public function selectApp(ImprovementAppArgumentsObject $argsObject = null)
    {
        $object = new PlatformAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClicked()
    {
        $this->selectField("clicked");

        return $this;
    }

    public function selectDismissed()
    {
        $this->selectField("dismissed");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLink(ImprovementLinkArgumentsObject $argsObject = null)
    {
        $object = new HelpLinkQueryObject("link");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectViewed()
    {
        $this->selectField("viewed");

        return $this;
    }
}
