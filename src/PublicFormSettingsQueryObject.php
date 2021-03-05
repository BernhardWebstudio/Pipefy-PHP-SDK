<?php

namespace GraphQL\SchemaObject;

class PublicFormSettingsQueryObject extends QueryObject
{
    public const OBJECT_NAME = 'PublicFormSettings';

    public function selectAfterSubmitMessage()
    {
        $this->selectField('afterSubmitMessage');

        return $this;
    }

    public function selectBackgroundColor()
    {
        $this->selectField('backgroundColor');

        return $this;
    }

    public function selectBackgroundImage()
    {
        $this->selectField('backgroundImage');

        return $this;
    }

    public function selectBrandColor()
    {
        $this->selectField('brandColor');

        return $this;
    }

    public function selectCanHidePipefyLogo()
    {
        $this->selectField('canHidePipefyLogo');

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField('description');

        return $this;
    }

    public function selectDisplayPipefyLogo()
    {
        $this->selectField('displayPipefyLogo');

        return $this;
    }

    public function selectLogo()
    {
        $this->selectField('logo');

        return $this;
    }

    public function selectOrganizationName()
    {
        $this->selectField('organizationName');

        return $this;
    }

    public function selectReuseLastSubmissionResponse()
    {
        $this->selectField('reuseLastSubmissionResponse');

        return $this;
    }

    public function selectShowSubmitAnotherResponseButton()
    {
        $this->selectField('showSubmitAnotherResponseButton');

        return $this;
    }

    public function selectSubmitButtonText()
    {
        $this->selectField('submitButtonText');

        return $this;
    }

    public function selectSubmitterEmailCollectionEnabled()
    {
        $this->selectField('submitterEmailCollectionEnabled');

        return $this;
    }

    public function selectSubmitterEmailCollectionMethod()
    {
        $this->selectField('submitterEmailCollectionMethod');

        return $this;
    }

    public function selectSubmitterEmailField(PublicFormSettingsSubmitterEmailFieldArgumentsObject $argsObject = null)
    {
        $object = new MinimalFieldQueryObject('submitterEmailField');
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField('title');

        return $this;
    }
}
