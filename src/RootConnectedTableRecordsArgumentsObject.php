<?php

namespace GraphQL\SchemaObject;

class RootConnectedTableRecordsArgumentsObject extends ArgumentsObject
{
    protected $first;

    protected $after;

    protected $last;

    protected $before;

    protected $tableId;

    protected $throughConnectors;

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
        $this->tableId = $tableId;

        return $this;
    }

    public function setThroughConnectors(
        ReferenceConnectorFieldInputInputObject $referenceConnectorFieldInputInputObject
    ) {
        $this->throughConnectors = $referenceConnectorFieldInputInputObject;

        return $this;
    }

    public function setSearch(TableRecordSearchInputObject $tableRecordSearchInputObject)
    {
        $this->search = $tableRecordSearchInputObject;

        return $this;
    }
}
