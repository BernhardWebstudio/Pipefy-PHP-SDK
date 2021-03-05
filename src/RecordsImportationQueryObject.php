<?php

namespace GraphQL\SchemaObject;

class RecordsImportationQueryObject extends QueryObject
{
    public function selectCreatedAt(): static
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(RecordsImportationCreatedByArgumentsObject $recordsImportationCreatedByArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('createdBy');
        if ($recordsImportationCreatedByArgumentsObject !== null) {
            $userQueryObject->appendArguments($recordsImportationCreatedByArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectImportedRecords(): static
    {
        $this->selectField('importedRecords');

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
