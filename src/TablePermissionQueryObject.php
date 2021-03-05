<?php

namespace GraphQL\SchemaObject;

class TablePermissionQueryObject extends QueryObject
{
    public function selectCanManageRecord(): static
    {
        $this->selectField('can_manage_record');

        return $this;
    }

    public function selectCanManageTable(): static
    {
        $this->selectField('can_manage_table');

        return $this;
    }
}
