<?php

namespace GraphQL\SchemaObject;

class RootRecordsImportationsArgumentsObject extends ArgumentsObject
{
    protected $tableId;

    /**
     * @var mixed[]|null
     */
    protected $status;

    public function setTableId($tableId): static
    {
        $this->tableId = $tableId;

        return $this;
    }

    /**
     * @param mixed[]|null $status
     */
    public function setStatus(array $status): static
    {
        $this->status = $status;

        return $this;
    }
}
