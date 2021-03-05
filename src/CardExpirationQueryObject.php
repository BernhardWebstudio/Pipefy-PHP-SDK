<?php

namespace GraphQL\SchemaObject;

class CardExpirationQueryObject extends QueryObject
{
    public function selectExpiredAt(): static
    {
        $this->selectField('expiredAt');

        return $this;
    }

    public function selectShouldExpireAt(): static
    {
        $this->selectField('shouldExpireAt');

        return $this;
    }
}
