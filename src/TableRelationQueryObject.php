<?php

namespace GraphQL\SchemaObject;

class TableRelationQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableRelation';

    public function selectAllChildrenMustBeDoneToFinishParent()
    {
        $this->selectField('allChildrenMustBeDoneToFinishParent');

        return $this;
    }

    public function selectAllChildrenMustBeDoneToMoveParent()
    {
        $this->selectField('allChildrenMustBeDoneToMoveParent');

        return $this;
    }

    public function selectCanConnectExistingItems()
    {
        $this->selectField('canConnectExistingItems');

        return $this;
    }

    public function selectCanConnectMultipleItems()
    {
        $this->selectField('canConnectMultipleItems');

        return $this;
    }

    public function selectCanCreateNewItems()
    {
        $this->selectField('canCreateNewItems');

        return $this;
    }

    public function selectChildMustExistToFinishParent()
    {
        $this->selectField('childMustExistToFinishParent');

        return $this;
    }

    public function selectChildMustExistToMoveParent()
    {
        $this->selectField('childMustExistToMoveParent');

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
