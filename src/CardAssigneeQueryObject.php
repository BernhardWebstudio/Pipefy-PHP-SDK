<?php

namespace GraphQL\SchemaObject;

class CardAssigneeQueryObject extends QueryObject
{
    public function selectAssignedAt(): static
    {
        $this->selectField('assignedAt');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }
}
