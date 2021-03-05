<?php

namespace GraphQL\SchemaObject;

class PublicFormSettingsQueryObject extends QueryObject
{
    public function selectAfterSubmitMessage(): static
    {
        $this->selectField('afterSubmitMessage');

        return $this;
    }

    public function selectBackgroundColor(): static
    {
        $this->selectField('backgroundColor');

        return $this;
    }

    public function selectBackgroundImage(): static
    {
        $this->selectField('backgroundImage');

        return $this;
    }

    public function selectBrandColor(): static
    {
        $this->selectField('brandColor');

        return $this;
    }

    public function selectCanHidePipefyLogo(): static
    {
        $this->selectField('canHidePipefyLogo');

        return $this;
    }

    public function selectDescription(): static
    {
        $this->selectField('description');

        return $this;
    }

    public function selectDisplayPipefyLogo(): static
    {
        $this->selectField('displayPipefyLogo');

        return $this;
    }

    public function selectLogo(): static
    {
        $this->selectField('logo');

        return $this;
    }

    public function selectOrganizationName(): static
    {
        $this->selectField('organizationName');

        return $this;
    }

    public function selectReuseLastSubmissionResponse(): static
    {
        $this->selectField('reuseLastSubmissionResponse');

        return $this;
    }

    public function selectShowSubmitAnotherResponseButton(): static
    {
        $this->selectField('showSubmitAnotherResponseButton');

        return $this;
    }

    public function selectSubmitButtonText(): static
    {
        $this->selectField('submitButtonText');

        return $this;
    }

    public function selectSubmitterEmailCollectionEnabled(): static
    {
        $this->selectField('submitterEmailCollectionEnabled');

        return $this;
    }

    public function selectSubmitterEmailCollectionMethod(): static
    {
        $this->selectField('submitterEmailCollectionMethod');

        return $this;
    }

    public function selectSubmitterEmailField(PublicFormSettingsSubmitterEmailFieldArgumentsObject $publicFormSettingsSubmitterEmailFieldArgumentsObject = null): MinimalFieldQueryObject
    {
        $minimalFieldQueryObject = new MinimalFieldQueryObject('submitterEmailField');
        if ($publicFormSettingsSubmitterEmailFieldArgumentsObject !== null) {
            $minimalFieldQueryObject->appendArguments($publicFormSettingsSubmitterEmailFieldArgumentsObject->toArray());
        }
        $this->selectField($minimalFieldQueryObject);

        return $minimalFieldQueryObject;
    }

    public function selectTitle(): static
    {
        $this->selectField('title');

        return $this;
    }
}
