<?php

namespace GraphQL\SchemaObject;

class cardLatenessQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'cardLateness';

    public function selectBecameLateAt()
    {
        $this->selectField('becameLateAt');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectShouldBecomeLateAt()
    {
        $this->selectField('shouldBecomeLateAt');

        return $this;
    }

    public function selectSla()
    {
        $this->selectField('sla');

        return $this;
    }
}
