<?php

namespace GraphQL\SchemaObject;

class UserPreferenceQueryObject extends QueryObject
{
    public function selectBrowserNativeNotificationEnabled(): static
    {
        $this->selectField('browserNativeNotificationEnabled');

        return $this;
    }

    public function selectDisplayImprovements(): static
    {
        $this->selectField('displayImprovements');

        return $this;
    }

    public function selectDisplayOrganizationReportSidebar(): static
    {
        $this->selectField('displayOrganizationReportSidebar');

        return $this;
    }

    public function selectDisplayPipeReportsSidebar(): static
    {
        $this->selectField('displayPipeReportsSidebar');

        return $this;
    }

    public function selectFavoritePipeIds(): static
    {
        $this->selectField('favoritePipeIds');

        return $this;
    }

    public function selectSuggestedTemplatesClosed(): static
    {
        $this->selectField('suggestedTemplatesClosed');

        return $this;
    }

    public function selectUseNewOpenCard(): static
    {
        $this->selectField('useNewOpenCard');

        return $this;
    }
}
