<?php

namespace GraphQL\SchemaObject;

class UserPreferenceQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'UserPreference';

    public function selectBrowserNativeNotificationEnabled()
    {
        $this->selectField('browserNativeNotificationEnabled');

        return $this;
    }

    public function selectDisplayImprovements()
    {
        $this->selectField('displayImprovements');

        return $this;
    }

    public function selectDisplayOrganizationReportSidebar()
    {
        $this->selectField('displayOrganizationReportSidebar');

        return $this;
    }

    public function selectDisplayPipeReportsSidebar()
    {
        $this->selectField('displayPipeReportsSidebar');

        return $this;
    }

    public function selectFavoritePipeIds()
    {
        $this->selectField('favoritePipeIds');

        return $this;
    }

    public function selectSuggestedTemplatesClosed()
    {
        $this->selectField('suggestedTemplatesClosed');

        return $this;
    }

    public function selectUseNewOpenCard()
    {
        $this->selectField('useNewOpenCard');

        return $this;
    }
}
