<?php

namespace GraphQL\SchemaObject;

class UserQueryObject extends QueryObject
{
    public function selectAvatarUrl(): static
    {
        $this->selectField('avatarUrl');

        return $this;
    }

    public function selectCreatedAt(): static
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDepartmentKey(): static
    {
        $this->selectField('departmentKey');

        return $this;
    }

    public function selectDisplayName(): static
    {
        $this->selectField('displayName');

        return $this;
    }

    public function selectEmail(): static
    {
        $this->selectField('email');

        return $this;
    }

    public function selectHasUnreadNotifications(): static
    {
        $this->selectField('hasUnreadNotifications');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLocale(): static
    {
        $this->selectField('locale');

        return $this;
    }

    public function selectName(): static
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPreferences(UserPreferencesArgumentsObject $userPreferencesArgumentsObject = null): UserPreferenceQueryObject
    {
        $userPreferenceQueryObject = new UserPreferenceQueryObject('preferences');
        if ($userPreferencesArgumentsObject !== null) {
            $userPreferenceQueryObject->appendArguments($userPreferencesArgumentsObject->toArray());
        }
        $this->selectField($userPreferenceQueryObject);

        return $userPreferenceQueryObject;
    }

    public function selectTimeZone(): static
    {
        $this->selectField('timeZone');

        return $this;
    }

    public function selectUsername(): static
    {
        $this->selectField('username');

        return $this;
    }
}
