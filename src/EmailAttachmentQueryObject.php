<?php

namespace GraphQL\SchemaObject;

class EmailAttachmentQueryObject extends QueryObject
{
    public function selectFileUrl(): static
    {
        $this->selectField('fileUrl');

        return $this;
    }

    public function selectFilename(): static
    {
        $this->selectField('filename');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectPublicUrl(): static
    {
        $this->selectField('public_url');

        return $this;
    }
}
