<?php

namespace GraphQL\SchemaObject;

class TableRecordRelationQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'TableRecordRelation';

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

    public function selectRepoItems(TableRecordRelationRepoItemsArgumentsObject $argsObject = null)
    {
        $object = new RepoItemTypesConnectionQueryObject('repo_items');
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
