<?php

namespace GraphQL\SchemaObject;

class CardRelationshipCardsArgumentsObject extends ArgumentsObject
{
    protected $done;

    public function setDone($done): static
    {
        $this->done = $done;

        return $this;
    }
}
