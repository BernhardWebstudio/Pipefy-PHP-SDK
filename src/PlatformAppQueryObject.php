<?php

namespace GraphQL\SchemaObject;

class PlatformAppQueryObject extends QueryObject
{
    public function selectAttachmentsConnection(PlatformAppAttachmentsConnectionArgumentsObject $platformAppAttachmentsConnectionArgumentsObject = null): AppAttachmentConnectionQueryObject
    {
        $appAttachmentConnectionQueryObject = new AppAttachmentConnectionQueryObject('attachments_connection');
        if ($platformAppAttachmentsConnectionArgumentsObject !== null) {
            $appAttachmentConnectionQueryObject->appendArguments($platformAppAttachmentsConnectionArgumentsObject->toArray());
        }
        $this->selectField($appAttachmentConnectionQueryObject);

        return $appAttachmentConnectionQueryObject;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPublic(): static
    {
        $this->selectField('public');

        return $this;
    }

    public function selectSlug(): static
    {
        $this->selectField('slug');

        return $this;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
