<?php

namespace GraphQL\SchemaObject;

class OrganizationQueryObject extends QueryObject
{
    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectCustomLogoUrl(): static
    {
        $this->selectField('custom_logo_url');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectMembers(OrganizationMembersArgumentsObject $organizationMembersArgumentsObject = null): MemberQueryObject
    {
        $memberQueryObject = new MemberQueryObject('members');
        if ($organizationMembersArgumentsObject !== null) {
            $memberQueryObject->appendArguments($organizationMembersArgumentsObject->toArray());
        }
        $this->selectField($memberQueryObject);

        return $memberQueryObject;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectOnlyAdminCanCreatePipes(): static
    {
        $this->selectField('only_admin_can_create_pipes');

        return $this;
    }

    public function selectOnlyAdminCanInviteUsers(): static
    {
        $this->selectField('only_admin_can_invite_users');

        return $this;
    }

    public function selectPipes(OrganizationPipesArgumentsObject $organizationPipesArgumentsObject = null): PipeQueryObject
    {
        $pipeQueryObject = new PipeQueryObject('pipes');
        if ($organizationPipesArgumentsObject !== null) {
            $pipeQueryObject->appendArguments($organizationPipesArgumentsObject->toArray());
        }
        $this->selectField($pipeQueryObject);

        return $pipeQueryObject;
    }

    public function selectRole(): static
    {
        $this->selectField('role');

        return $this;
    }

    public function selectTables(OrganizationTablesArgumentsObject $organizationTablesArgumentsObject = null): TableConnectionQueryObject
    {
        $tableConnectionQueryObject = new TableConnectionQueryObject('tables');
        if ($organizationTablesArgumentsObject !== null) {
            $tableConnectionQueryObject->appendArguments($organizationTablesArgumentsObject->toArray());
        }
        $this->selectField($tableConnectionQueryObject);

        return $tableConnectionQueryObject;
    }

    public function selectUsers(OrganizationUsersArgumentsObject $organizationUsersArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('users');
        if ($organizationUsersArgumentsObject !== null) {
            $userQueryObject->appendArguments($organizationUsersArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectUsersCount(): static
    {
        $this->selectField('users_count');

        return $this;
    }
}
