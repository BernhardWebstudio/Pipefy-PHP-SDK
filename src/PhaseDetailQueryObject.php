<?php

namespace GraphQL\SchemaObject;

class PhaseDetailQueryObject extends QueryObject
{
    const OBJECT_NAME = "PhaseDetail";

    public function selectBecameLate()
    {
        $this->selectField("became_late");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectDraft()
    {
        $this->selectField("draft");

        return $this;
    }

    public function selectDuration()
    {
        $this->selectField("duration");

        return $this;
    }

    public function selectFirstTimeIn()
    {
        $this->selectField("firstTimeIn");

        return $this;
    }

    public function selectLastTimeIn()
    {
        $this->selectField("lastTimeIn");

        return $this;
    }

    public function selectLastTimeOut()
    {
        $this->selectField("lastTimeOut");

        return $this;
    }

    public function selectPhase(PhaseDetailPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject("phase");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
