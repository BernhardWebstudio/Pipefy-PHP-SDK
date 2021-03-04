<?php

namespace GraphQL\SchemaObject;

class CardExpirationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CardExpiration";

    public function selectExpiredAt()
    {
        $this->selectField("expiredAt");

        return $this;
    }

    public function selectShouldExpireAt()
    {
        $this->selectField("shouldExpireAt");

        return $this;
    }
}
