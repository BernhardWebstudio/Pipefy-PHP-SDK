<?php

namespace GraphQL\SchemaObject;

class PipeUsersArgumentsObject extends ArgumentsObject
{
    protected $filterUnacceptedInvitation;

    public function setFilterUnacceptedInvitation($filterUnacceptedInvitation)
    {
        $this->filterUnacceptedInvitation = $filterUnacceptedInvitation;

        return $this;
    }
}
