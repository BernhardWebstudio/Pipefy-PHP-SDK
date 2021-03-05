<?php

namespace GraphQL\SchemaObject;

class CardsImportationQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'CardsImportation';

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(CardsImportationCreatedByArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject('createdBy');
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

    public function selectImportedCards()
    {
        $this->selectField('importedCards');

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField('status');

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }
}
