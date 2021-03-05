<?php

namespace GraphQL\SchemaObject;

class RootCardsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $pipe_id;

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

    public function setPipeId($pipeId): static
    {
        $this->pipe_id = $pipeId;

        return $this;
    }

    public function setSearch(CardSearchInputObject $cardSearchInputObject): static
    {
        $this->search = $cardSearchInputObject;

        return $this;
    }
}
