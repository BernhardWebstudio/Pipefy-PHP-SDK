<?php

namespace GraphQL\SchemaObject;

class PipeRelationQueryObject extends QueryObject
{
    public function selectAllChildrenMustBeDoneToFinishParent(): static
    {
        $this->selectField('allChildrenMustBeDoneToFinishParent');

        return $this;
    }

    public function selectAllChildrenMustBeDoneToMoveParent(): static
    {
        $this->selectField('allChildrenMustBeDoneToMoveParent');

        return $this;
    }

    public function selectAutoFillFieldEnabled(): static
    {
        $this->selectField('autoFillFieldEnabled');

        return $this;
    }

    public function selectCanConnectExistingItems(): static
    {
        $this->selectField('canConnectExistingItems');

        return $this;
    }

    public function selectCanConnectMultipleItems(): static
    {
        $this->selectField('canConnectMultipleItems');

        return $this;
    }

    public function selectCanCreateNewItems(): static
    {
        $this->selectField('canCreateNewItems');

        return $this;
    }

    public function selectChildMustExistToFinishParent(): static
    {
        $this->selectField('childMustExistToFinishParent');

        return $this;
    }

    public function selectChildMustExistToMoveParent(): static
    {
        $this->selectField('childMustExistToMoveParent');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOwnFieldMaps(PipeRelationOwnFieldMapsArgumentsObject $pipeRelationOwnFieldMapsArgumentsObject = null): FieldMapQueryObject
    {
        $fieldMapQueryObject = new FieldMapQueryObject('ownFieldMaps');
        if ($pipeRelationOwnFieldMapsArgumentsObject !== null) {
            $fieldMapQueryObject->appendArguments($pipeRelationOwnFieldMapsArgumentsObject->toArray());
        }
        $this->selectField($fieldMapQueryObject);

        return $fieldMapQueryObject;
    }
}
