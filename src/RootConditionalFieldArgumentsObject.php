<?php

namespace GraphQL\SchemaObject;

class RootConditionalFieldArgumentsObject extends ArgumentsObject
{
    protected $repoId;

    protected $cardId;

    protected $overrideFieldValue;

    public function setRepoId($repoId)
    {
        $this->repoId = $repoId;

        return $this;
    }

    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    public function setOverrideFieldValue(array $overrideFieldValue)
    {
        $this->overrideFieldValue = $overrideFieldValue;

        return $this;
    }
}
