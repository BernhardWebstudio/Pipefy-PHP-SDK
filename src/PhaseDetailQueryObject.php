<?php

namespace GraphQL\SchemaObject;

class PhaseDetailQueryObject extends QueryObject
{
    public function selectBecameLate(): static
    {
        $this->selectField('became_late');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDraft(): static
    {
        $this->selectField('draft');

        return $this;
    }

    public function selectDuration(): static
    {
        $this->selectField('duration');

        return $this;
    }

    public function selectFirstTimeIn(): static
    {
        $this->selectField('firstTimeIn');

        return $this;
    }

    public function selectLastTimeIn(): static
    {
        $this->selectField('lastTimeIn');

        return $this;
    }

    public function selectLastTimeOut(): static
    {
        $this->selectField('lastTimeOut');

        return $this;
    }

    public function selectPhase(PhaseDetailPhaseArgumentsObject $phaseDetailPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($phaseDetailPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($phaseDetailPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }
}
