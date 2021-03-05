<?php

namespace GraphQL\SchemaObject;

class AttachmentQueryObject extends QueryObject
{
    public function selectCreatedAt(): static
    {
        $this->selectField('createdAt');

        return $this;
    }

    public function selectCreatedBy(AttachmentCreatedByArgumentsObject $attachmentCreatedByArgumentsObject = null): UserQueryObject
    {
        $userQueryObject = new UserQueryObject('createdBy');
        if ($attachmentCreatedByArgumentsObject !== null) {
            $userQueryObject->appendArguments($attachmentCreatedByArgumentsObject->toArray());
        }
        $this->selectField($userQueryObject);

        return $userQueryObject;
    }

    public function selectMinimalField(AttachmentFieldArgumentsObject $attachmentFieldArgumentsObject = null): MinimalFieldQueryObject
    {
        $minimalFieldQueryObject = new MinimalFieldQueryObject('field');
        if ($attachmentFieldArgumentsObject !== null) {
            $minimalFieldQueryObject->appendArguments($attachmentFieldArgumentsObject->toArray());
        }
        $this->selectField($minimalFieldQueryObject);

        return $minimalFieldQueryObject;
    }

    public function selectPath(): static
    {
        $this->selectField('path');

        return $this;
    }

    public function selectPhase(AttachmentPhaseArgumentsObject $attachmentPhaseArgumentsObject = null): PhaseQueryObject
    {
        $phaseQueryObject = new PhaseQueryObject('phase');
        if ($attachmentPhaseArgumentsObject !== null) {
            $phaseQueryObject->appendArguments($attachmentPhaseArgumentsObject->toArray());
        }
        $this->selectField($phaseQueryObject);

        return $phaseQueryObject;
    }

    public function selectUrl(): static
    {
        $this->selectField('url');

        return $this;
    }
}
