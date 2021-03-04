<?php

namespace GraphQL\SchemaObject;

class OrganizationPipesArgumentsObject extends ArgumentsObject
{
    protected $ids;
    protected $include_publics;
    protected $with_permission;
    protected $anyone_can_create_card;
    protected $onlyFullyVisible;
    protected $name_search;

    public function setIds(array $ids)
    {
        $this->ids = $ids;

        return $this;
    }

    public function setIncludePublics($includePublics)
    {
        $this->include_publics = $includePublics;

        return $this;
    }

    public function setWithPermission($withPermission)
    {
        $this->with_permission = $withPermission;

        return $this;
    }

    public function setAnyoneCanCreateCard($anyoneCanCreateCard)
    {
        $this->anyone_can_create_card = $anyoneCanCreateCard;

        return $this;
    }

    public function setOnlyFullyVisible($onlyFullyVisible)
    {
        $this->onlyFullyVisible = $onlyFullyVisible;

        return $this;
    }

    public function setNameSearch($nameSearch)
    {
        $this->name_search = $nameSearch;

        return $this;
    }
}
