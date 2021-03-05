<?php

namespace GraphQL\SchemaObject;

class PhaseCardsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $search;

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

    public function setSearch(CardSearchInputObject $cardSearchInputObject)
    {
        $this->search = $cardSearchInputObject;

        return $this;
    }
}
