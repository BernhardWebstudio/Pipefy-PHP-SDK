<?php

namespace GraphQL\SchemaObject;

class RootTableRecordsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $table_id;

    /**
     * @var TableRecordSearchInputObject|null
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

    public function setTableId($tableId): static
    {
        $this->table_id = $tableId;

        return $this;
    }

    public function setSearch(TableRecordSearchInputObject $tableRecordSearchInputObject): static
    {
        $this->search = $tableRecordSearchInputObject;

        return $this;
    }
}
