<?php

namespace GraphQL\SchemaObject;

class CardCardAssigneesArgumentsObject extends ArgumentsObject
{
    protected $userId;

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
