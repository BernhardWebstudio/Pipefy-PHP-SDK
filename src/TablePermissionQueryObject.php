<?php

namespace GraphQL\SchemaObject;

class TablePermissionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TablePermission";

    public function selectCanManageRecord()
    {
        $this->selectField("can_manage_record");

        return $this;
    }

    public function selectCanManageTable()
    {
        $this->selectField("can_manage_table");

        return $this;
    }
}
