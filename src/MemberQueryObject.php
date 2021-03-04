<?php

namespace GraphQL\SchemaObject;

class MemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "Member";

    public function selectRoleName()
    {
        $this->selectField("role_name");

        return $this;
    }

    public function selectUser(MemberUserArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
