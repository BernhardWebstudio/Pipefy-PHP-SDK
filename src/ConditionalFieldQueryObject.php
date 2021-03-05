<?php

namespace GraphQL\SchemaObject;

class ConditionalFieldQueryObject extends QueryObject
{
    public function selectFieldsToHide(ConditionalFieldFieldsToHideArgumentsObject $conditionalFieldFieldsToHideArgumentsObject = null): PhaseFieldQueryObject
    {
        $phaseFieldQueryObject = new PhaseFieldQueryObject('fieldsToHide');
        if ($conditionalFieldFieldsToHideArgumentsObject !== null) {
            $phaseFieldQueryObject->appendArguments($conditionalFieldFieldsToHideArgumentsObject->toArray());
        }
        $this->selectField($phaseFieldQueryObject);

        return $phaseFieldQueryObject;
    }
}
