<?php

namespace GraphQL\SchemaObject;

class TableTableRecordsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

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
}
