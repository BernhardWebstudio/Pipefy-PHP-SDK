<?php

namespace GraphQL\SchemaObject;

class CardsImportationQueryObject extends QueryObject
{
    public function selectCreatedAt(): static
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(CardsImportationCreatedByArgumentsObject $cardsImportationCreatedByArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('createdBy');
        if ($cardsImportationCreatedByArgumentsObject !== null) {
            $userQueryObject->appendArguments($cardsImportationCreatedByArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectImportedCards(): static
    {
        $this->selectField('importedCards');

        return $this;
    }

    public function selectStatus(): static
    {
        $this->selectField('status');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
