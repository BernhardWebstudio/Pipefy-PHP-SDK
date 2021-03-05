<?php

namespace GraphQL\SchemaObject;

class PublicTableRecordQueryObject extends QueryObject
{
    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPath(): static
    {
        $this->selectField('path');

        return $this;
    }

    public function selectSummary(PublicTableRecordSummaryArgumentsObject $publicTableRecordSummaryArgumentsObject = null): SummaryQueryObject
    {
        $summaryQueryObject = new SummaryQueryObject('summary');
        if ($publicTableRecordSummaryArgumentsObject !== null) {
            $summaryQueryObject->appendArguments($publicTableRecordSummaryArgumentsObject->toArray());
        }
        $this->selectField($summaryQueryObject);

        return $summaryQueryObject;
    }

    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }
}
