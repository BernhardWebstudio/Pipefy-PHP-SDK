<?php

namespace GraphQL\SchemaObject;

class ImprovementQueryObject extends QueryObject
{
    public function selectApp(ImprovementAppArgumentsObject $improvementAppArgumentsObject = null): PlatformAppQueryObject
    {
        $platformAppQueryObject = new PlatformAppQueryObject('app');
        if ($improvementAppArgumentsObject !== null) {
            $platformAppQueryObject->appendArguments($improvementAppArgumentsObject->toArray());
        }
        $this->selectField($platformAppQueryObject);

        return $platformAppQueryObject;
    }

    public function selectClicked(): static
    {
        $this->selectField('clicked');

        return $this;
    }

    public function selectDismissed(): static
    {
        $this->selectField('dismissed');

        return $this;
    }

    public function selectEnabled(): static
    {
        $this->selectField('enabled');

        return $this;
    }

    public function selectId(): static
    {
        $this->selectField('id');

        return $this;
    }

    public function selectLink(ImprovementLinkArgumentsObject $improvementLinkArgumentsObject = null): HelpLinkQueryObject
    {
        $helpLinkQueryObject = new HelpLinkQueryObject('link');
        if ($improvementLinkArgumentsObject !== null) {
            $helpLinkQueryObject->appendArguments($improvementLinkArgumentsObject->toArray());
        }
        $this->selectField($helpLinkQueryObject);

        return $helpLinkQueryObject;
    }

    public function selectViewed(): static
    {
        $this->selectField('viewed');

        return $this;
    }
}
