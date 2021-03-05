<?php

namespace GraphQL\SchemaObject;

class TableRecordSearchInputObject extends InputObject
{
    protected $assignee_ids;

    protected $ignore_ids;

    protected $label_ids;

    protected $orderDirection;

    protected $orderField;

    protected $title;

    protected $include_done;

    public function setAssigneeIds(array $assigneeIds)
    {
        $this->assignee_ids = $assigneeIds;

        return $this;
    }

    public function setIgnoreIds(array $ignoreIds)
    {
        $this->ignore_ids = $ignoreIds;

        return $this;
    }

    public function setLabelIds(array $labelIds)
    {
        $this->label_ids = $labelIds;

        return $this;
    }

    public function setOrderDirection($orderDirection)
    {
        $this->orderDirection = $orderDirection;

        return $this;
    }

    public function setOrderField($orderField)
    {
        $this->orderField = $orderField;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setIncludeDone($includeDone)
    {
        $this->include_done = $includeDone;

        return $this;
    }
}
