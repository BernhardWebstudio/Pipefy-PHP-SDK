<?php

namespace GraphQL\SchemaObject;

class SummaryGroupQueryObject extends QueryObject
{
    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOptions(SummaryGroupOptionsArgumentsObject $summaryGroupOptionsArgumentsObject = null): SummaryOptionQueryObject
    {
        $summaryOptionQueryObject = new SummaryOptionQueryObject('options');
        if ($summaryGroupOptionsArgumentsObject !== null) {
            $summaryOptionQueryObject->appendArguments($summaryGroupOptionsArgumentsObject->toArray());
        }
        $this->selectField($summaryOptionQueryObject);

        return $summaryOptionQueryObject;
    }
}
