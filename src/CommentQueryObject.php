<?php

namespace GraphQL\SchemaObject;

class CommentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Comment";

    public function selectAuthor(CommentAuthorArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("author");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAuthorName()
    {
        $this->selectField("author_name");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectText()
    {
        $this->selectField("text");

        return $this;
    }
}
