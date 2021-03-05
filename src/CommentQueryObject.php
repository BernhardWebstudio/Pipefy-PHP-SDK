<?php

namespace GraphQL\SchemaObject;

class CommentQueryObject extends QueryObject
{
    public function selectAuthor(CommentAuthorArgumentsObject $commentAuthorArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('author');
        if ($commentAuthorArgumentsObject !== null) {
            $userQueryObject->appendArguments($commentAuthorArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectAuthorName(): static
    {
        $this->selectField('author_name');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectText(): static
    {
        $this->selectField('text');

        return $this;
    }
}
