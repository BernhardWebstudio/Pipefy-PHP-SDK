<?php

namespace GraphQL\SchemaObject;

class RootRecordsImportationsArgumentsObject extends ArgumentsObject
{
    protected $tableId;
    protected $status;

    public function setTableId($tableId)
    {
        $this->tableId = $tableId;

        return $this;
    }

    public function setStatus(array $status)
    {
        $this->status = $status;

        return $this;
    }
}
