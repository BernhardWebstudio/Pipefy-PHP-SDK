<?php

namespace GraphQL\SchemaObject;

class RootAllCardsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $pipeId;

    /**
     * @var AdvancedSearchInputObject|null
     */
    protected $filter;

    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after): static
    {
        $this->after = $after;

        return $this;
    }

    public function setLast($last): static
    {
        $this->last = $last;

        return $this;
    }

    public function setBefore($before): static
    {
        $this->before = $before;

        return $this;
    }

    public function setPipeId($pipeId): static
    {
        $this->pipeId = $pipeId;

        return $this;
    }

    public function setFilter(AdvancedSearchInputObject $advancedSearchInputObject): static
    {
        $this->filter = $advancedSearchInputObject;

        return $this;
    }
}
