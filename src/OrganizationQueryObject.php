<?php

namespace GraphQL\SchemaObject;

class OrganizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Organization";

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectCustomLogoUrl()
    {
        $this->selectField("custom_logo_url");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMembers(OrganizationMembersArgumentsObject $argsObject = null)
    {
        $object = new MemberQueryObject("members");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOnlyAdminCanCreatePipes()
    {
        $this->selectField("only_admin_can_create_pipes");

        return $this;
    }

    public function selectOnlyAdminCanInviteUsers()
    {
        $this->selectField("only_admin_can_invite_users");

        return $this;
    }

    public function selectPipes(OrganizationPipesArgumentsObject $argsObject = null)
    {
        $object = new PipeQueryObject("pipes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRole()
    {
        $this->selectField("role");

        return $this;
    }

    public function selectTables(OrganizationTablesArgumentsObject $argsObject = null)
    {
        $object = new TableConnectionQueryObject("tables");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsers(OrganizationUsersArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("users");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsersCount()
    {
        $this->selectField("users_count");

        return $this;
    }
}
