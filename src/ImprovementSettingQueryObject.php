<?php

namespace GraphQL\SchemaObject;

class ImprovementSettingQueryObject extends QueryObject
{
    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectImprovements(ImprovementSettingImprovementsArgumentsObject $improvementSettingImprovementsArgumentsObject = null): ImprovementQueryObject
    {
        $improvementQueryObject = new ImprovementQueryObject('improvements');
        if ($improvementSettingImprovementsArgumentsObject !== null) {
            $improvementQueryObject->appendArguments($improvementSettingImprovementsArgumentsObject->toArray());
        }
        $this->selectField($improvementQueryObject);

        return $improvementQueryObject;
    }

    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }
}
