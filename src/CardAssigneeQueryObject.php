<?php

namespace GraphQL\SchemaObject;

class CardAssigneeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CardAssignee";

    public function selectAssignedAt()
    {
        $this->selectField("assignedAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
