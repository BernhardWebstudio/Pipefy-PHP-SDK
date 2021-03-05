<?php

namespace GraphQL\SchemaObject;

class PipeUsersArgumentsObject extends ArgumentsObject
{
    protected $filterUnacceptedInvitation;

    public function setFilterUnacceptedInvitation($filterUnacceptedInvitation): static
    {
        $this->filterUnacceptedInvitation = $filterUnacceptedInvitation;

        return $this;
    }
}
