<?php

namespace GraphQL\SchemaObject;

class OrganizationPipesArgumentsObject extends ArgumentsObject
{
    /**
     * @var mixed[]|null
     */
    protected $ids;

    protected $include_publics;

    protected $with_permission;

    protected $anyone_can_create_card;

    protected $onlyFullyVisible;

    protected $name_search;

    /**
     * @param mixed[]|null $ids
     */
    public function setIds(?array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    public function setIncludePublics($includePublics): static
    {
        $this->include_publics = $includePublics;

        return $this;
    }

    public function setWithPermission($withPermission): static
    {
        $this->with_permission = $withPermission;

        return $this;
    }

    public function setAnyoneCanCreateCard($anyoneCanCreateCard): static
    {
        $this->anyone_can_create_card = $anyoneCanCreateCard;

        return $this;
    }

    public function setOnlyFullyVisible($onlyFullyVisible): static
    {
        $this->onlyFullyVisible = $onlyFullyVisible;

        return $this;
    }

    public function setNameSearch($nameSearch): static
    {
        $this->name_search = $nameSearch;

        return $this;
    }
}
