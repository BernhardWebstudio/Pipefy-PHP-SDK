<?php

namespace GraphQL\SchemaObject;

class ConditionalFieldQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'ConditionalField';

    public function selectFieldsToHide(ConditionalFieldFieldsToHideArgumentsObject $argsObject = null)
    {
        $object = new PhaseFieldQueryObject('fieldsToHide');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
