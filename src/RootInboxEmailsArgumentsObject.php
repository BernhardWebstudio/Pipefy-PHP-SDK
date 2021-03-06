<?php

namespace GraphQL\SchemaObject;

class RootInboxEmailsArgumentsObject extends ArgumentsObject
{
    protected $card_id;

    public function setCardId($cardId): static
    {
        $this->card_id = $cardId;

        return $this;
    }
}
