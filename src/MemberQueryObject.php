<?php

namespace GraphQL\SchemaObject;

class MemberQueryObject extends QueryObject
{
    public function selectRoleName(): static
    {
        $this->selectField('role_name');

        return $this;
    }

    public function selectUser(MemberUserArgumentsObject $memberUserArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('user');
        if ($memberUserArgumentsObject !== null) {
            $userQueryObject->appendArguments($memberUserArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }
}
