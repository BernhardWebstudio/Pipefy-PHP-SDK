<?php

namespace GraphQL\SchemaObject;

class cardLatenessQueryObject extends QueryObject
{
    public function selectBecameLateAt(): static
    {
        $this->selectField('becameLateAt');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectShouldBecomeLateAt(): static
    {
        $this->selectField('shouldBecomeLateAt');

        return $this;
    }

    public function selectSla(): static
    {
        $this->selectField('sla');

        return $this;
    }
}
