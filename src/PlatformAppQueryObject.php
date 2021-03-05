<?php

namespace GraphQL\SchemaObject;

class PlatformAppQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PlatformApp';

    public function selectAttachmentsConnection(PlatformAppAttachmentsConnectionArgumentsObject $argsObject = null)
    {
        $object = new AppAttachmentConnectionQueryObject('attachments_connection');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPublic()
    {
        $this->selectField('public');

        return $this;
    }

    public function selectSlug()
    {
        $this->selectField('slug');

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField('url');

        return $this;
    }
}
