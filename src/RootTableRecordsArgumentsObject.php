<?php

namespace GraphQL\SchemaObject;

class RootTableRecordsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $table_id;

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

    public function setTableId($tableId)
    {
        $this->table_id = $tableId;

        return $this;
    }

    public function setSearch(TableRecordSearchInputObject $tableRecordSearchInputObject)
    {
        $this->search = $tableRecordSearchInputObject;

        return $this;
    }
}
