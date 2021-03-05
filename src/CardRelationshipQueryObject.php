<?php

namespace GraphQL\SchemaObject;

class CardRelationshipQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'CardRelationship';

    public function selectCards(CardRelationshipCardsArgumentsObject $argsObject = null)
    {
        $object = new CardQueryObject('cards');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectPipe(CardRelationshipPipeArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject('pipe');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSourceType()
    {
        $this->selectField('source_type');

        return $this;
    }
}
