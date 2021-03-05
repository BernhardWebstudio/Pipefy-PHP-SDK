<?php

namespace GraphQL\SchemaObject;

class PhaseCardsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    /**
     * @var CardSearchInputObject|null
     */
    protected $search;

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

    public function setSearch(CardSearchInputObject $cardSearchInputObject): static
    {
        $this->search = $cardSearchInputObject;

        return $this;
    }
}
