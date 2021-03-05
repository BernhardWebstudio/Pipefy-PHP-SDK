<?php

namespace GraphQL\SchemaObject;

class RootAllCardsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $pipeId;

    protected $filter;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }

    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }

    public function setPipeId($pipeId)
    {
        $this->pipeId = $pipeId;

        return $this;
    }

    public function setFilter(AdvancedSearchInputObject $advancedSearchInputObject)
    {
        $this->filter = $advancedSearchInputObject;

        return $this;
    }
}
