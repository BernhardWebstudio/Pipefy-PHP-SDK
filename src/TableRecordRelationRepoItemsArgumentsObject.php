<?php

namespace GraphQL\SchemaObject;

class TableRecordRelationRepoItemsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $done;

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

    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }
}
