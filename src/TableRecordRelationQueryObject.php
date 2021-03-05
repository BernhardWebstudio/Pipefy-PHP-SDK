<?php

namespace GraphQL\SchemaObject;

class TableRecordRelationQueryObject extends QueryObject
{
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

    public function selectRepoItems(TableRecordRelationRepoItemsArgumentsObject $tableRecordRelationRepoItemsArgumentsObject = null): RepoItemTypesConnectionQueryObject
    {
        $repoItemTypesConnectionQueryObject = new RepoItemTypesConnectionQueryObject('repo_items');
        if ($tableRecordRelationRepoItemsArgumentsObject !== null) {
            $repoItemTypesConnectionQueryObject->appendArguments($tableRecordRelationRepoItemsArgumentsObject->toArray());
        }
        $this->selectField($repoItemTypesConnectionQueryObject);

        return $repoItemTypesConnectionQueryObject;
    }

    public function selectSourceType(): static
    {
        $this->selectField('source_type');

        return $this;
    }
}
