<?php

namespace GraphQL\SchemaObject;

class AttachmentQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'Attachment';

    public function selectCreatedAt()
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(AttachmentCreatedByArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject('createdBy');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinimalField(AttachmentFieldArgumentsObject $argsObject = null)
    {
        $object = new MinimalFieldQueryObject('field');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPath()
    {
        $this->selectField('path');

        return $this;
    }

    public function selectPhase(AttachmentPhaseArgumentsObject $argsObject = null)
    {
        $object = new PhaseQueryObject('phase');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }
}
