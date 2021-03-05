<?php

namespace GraphQL\SchemaObject;

class CardRelationshipQueryObject extends QueryObject
{
    public function selectCards(CardRelationshipCardsArgumentsObject $cardRelationshipCardsArgumentsObject = null): CardQueryObject
    {
        $cardQueryObject = new CardQueryObject('cards');
        if ($cardRelationshipCardsArgumentsObject !== null) {
            $cardQueryObject->appendArguments($cardRelationshipCardsArgumentsObject->toArray());
        }
        $this->selectField($cardQueryObject);

        return $cardQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPipe(CardRelationshipPipeArgumentsObject $cardRelationshipPipeArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipe');
        if ($cardRelationshipPipeArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($cardRelationshipPipeArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectSourceType(): static
    {
        $this->selectField('source_type');

        return $this;
    }
}
