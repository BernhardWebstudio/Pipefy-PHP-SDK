<?php

namespace GraphQL\SchemaObject;

class PhaseFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "PhaseField";

    public function selectAllChildrenMustBeDoneToFinishParent()
    {
        $this->selectField("allChildrenMustBeDoneToFinishParent");

        return $this;
    }

    public function selectAllChildrenMustBeDoneToMoveParent()
    {
        $this->selectField("allChildrenMustBeDoneToMoveParent");

        return $this;
    }

    public function selectCanConnectExisting()
    {
        $this->selectField("canConnectExisting");

        return $this;
    }

    public function selectCanConnectMultiples()
    {
        $this->selectField("canConnectMultiples");

        return $this;
    }

    public function selectCanCreateNewConnected()
    {
        $this->selectField("canCreateNewConnected");

        return $this;
    }

    public function selectChildMustExistToFinishParent()
    {
        $this->selectField("childMustExistToFinishParent");

        return $this;
    }

    public function selectCustomValidation()
    {
        $this->selectField("custom_validation");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectEditable()
    {
        $this->selectField("editable");

        return $this;
    }

    public function selectHelp()
    {
        $this->selectField("help");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIndexName()
    {
        $this->selectField("index_name");

        return $this;
    }

    public function selectInternalId()
    {
        $this->selectField("internal_id");

        return $this;
    }

    public function selectIsMultiple()
    {
        $this->selectField("is_multiple");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectMinimalView()
    {
        $this->selectField("minimal_view");

        return $this;
    }

    public function selectOptions()
    {
        $this->selectField("options");

        return $this;
    }

    public function selectPhase(PhaseFieldPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject("phase");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequired()
    {
        $this->selectField("required");

        return $this;
    }

    public function selectSyncedWithCard()
    {
        $this->selectField("synced_with_card");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }
}
