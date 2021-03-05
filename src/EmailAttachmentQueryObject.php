<?php

namespace GraphQL\SchemaObject;

class EmailAttachmentQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'EmailAttachment';

    public function selectFileUrl()
    {
        $this->selectField('fileUrl');

        return $this;
    }

    public function selectFilename()
    {
        $this->selectField('filename');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPublicUrl()
    {
        $this->selectField('public_url');

        return $this;
    }
}
