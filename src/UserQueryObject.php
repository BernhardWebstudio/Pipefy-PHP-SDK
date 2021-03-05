<?php

namespace GraphQL\SchemaObject;

class UserQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'User';

    public function selectAvatarUrl()
    {
        $this->selectField('avatarUrl');

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField('created_at');

        return $this;
    }

    public function selectDepartmentKey()
    {
        $this->selectField('departmentKey');

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField('displayName');

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField('email');

        return $this;
    }

    public function selectHasUnreadNotifications()
    {
        $this->selectField('hasUnreadNotifications');

        return $this;
    }

    public function selectId()
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField('locale');

        return $this;
    }

    public function selectName()
    {
        $this->selectField('name');

        return $this;
    }

    public function selectPreferences(UserPreferencesArgumentsObject $argsObject = null)
    {
        $object = new UserPreferenceQueryObject('preferences');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTimeZone()
    {
        $this->selectField('timeZone');

        return $this;
    }

    public function selectUsername()
    {
        $this->selectField('username');

        return $this;
    }
}
