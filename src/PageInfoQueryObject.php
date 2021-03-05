<?php

namespace GraphQL\SchemaObject;

class PageInfoQueryObject extends QueryObject
{
    public function selectEndCursor(): static
    {
        $this->selectField('endCursor');

        return $this;
    }

    public function selectHasNextPage(): static
    {
        $this->selectField('hasNextPage');

        return $this;
    }

    public function selectHasPreviousPage(): static
    {
        $this->selectField('hasPreviousPage');

        return $this;
    }

    public function selectStartCursor(): static
    {
        $this->selectField('startCursor');

        return $this;
    }
}
