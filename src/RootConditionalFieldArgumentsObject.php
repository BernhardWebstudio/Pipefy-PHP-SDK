<?php

namespace GraphQL\SchemaObject;

class RootConditionalFieldArgumentsObject extends ArgumentsObject
{
    protected $repoId;

    protected $cardId;

    /**
     * @var mixed[]|null
     */
    protected $overrideFieldValue;

    public function setRepoId($repoId): static
    {
        $this->repoId = $repoId;

        return $this;
    }

    public function setCardId($cardId): static
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * @param mixed[]|null $overrideFieldValue
     */
    public function setOverrideFieldValue(array $overrideFieldValue): static
    {
        $this->overrideFieldValue = $overrideFieldValue;

        return $this;
    }
}
