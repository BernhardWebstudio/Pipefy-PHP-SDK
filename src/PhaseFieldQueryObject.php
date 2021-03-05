<?php

namespace GraphQL\SchemaObject;

class PhaseFieldQueryObject extends QueryObject
{
    public function selectAllChildrenMustBeDoneToFinishParent(): static
    {
        $this->selectField('allChildrenMustBeDoneToFinishParent');

        return $this;
    }

    public function selectAllChildrenMustBeDoneToMoveParent(): static
    {
        $this->selectField('allChildrenMustBeDoneToMoveParent');

        return $this;
    }

    public function selectCanConnectExisting(): static
    {
        $this->selectField('canConnectExisting');

        return $this;
    }

    public function selectCanConnectMultiples(): static
    {
        $this->selectField('canConnectMultiples');

        return $this;
    }

    public function selectCanCreateNewConnected(): static
    {
        $this->selectField('canCreateNewConnected');

        return $this;
    }

    public function selectChildMustExistToFinishParent(): static
    {
        $this->selectField('childMustExistToFinishParent');

        return $this;
    }

    public function selectCustomValidation(): static
    {
        $this->selectField('custom_validation');

        return $this;
    }

    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectEditable(): static
    {
        $this->selectField('editable');

        return $this;
    }

    public function selectHelp(): static
    {
        $this->selectField('help');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectIndexName(): static
    {
        $this->selectField('index_name');

        return $this;
    }

    public function selectInternalId(): static
    {
        $this->selectField('internal_id');

        return $this;
    }

    public function selectIsMultiple(): static
    {
        $this->selectField('is_multiple');

        return $this;
    }

    public function selectLabel(): static
    {
        $this->selectField('label');

        return $this;
    }

    public function selectMinimalView(): static
    {
        $this->selectField('minimal_view');

        return $this;
    }

    public function selectOptions(): static
    {
        $this->selectField('options');

        return $this;
    }

    public function selectPhase(PhaseFieldPhaseArgumentsObject $phaseFieldPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($phaseFieldPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($phaseFieldPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectRequired(): static
    {
        $this->selectField('required');

        return $this;
    }

    public function selectSyncedWithCard(): static
    {
        $this->selectField('synced_with_card');

        return $this;
    }

    public function selectType(): static
    {
        $this->selectField('type');

        return $this;
    }

    public function selectUuid(): static
    {
        $this->selectField('uuid');

        return $this;
    }
}
