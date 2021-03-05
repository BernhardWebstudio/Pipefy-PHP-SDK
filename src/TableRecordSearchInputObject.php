<?php

namespace GraphQL\SchemaObject;

class TableRecordSearchInputObject extends InputObject
{
    /**
     * @var mixed[]|null
     */
    protected $assignee_ids;

    /**
     * @var mixed[]|null
     */
    protected $ignore_ids;

    /**
     * @var mixed[]|null
     */
    protected $label_ids;

    protected $orderDirection;

    protected $orderField;

    protected $title;

    protected $include_done;

    /**
     * @param mixed[]|null $assigneeIds
     */
    public function setAssigneeIds(array $assigneeIds): static
    {
        $this->assignee_ids = $assigneeIds;

        return $this;
    }

    /**
     * @param mixed[]|null $ignoreIds
     */
    public function setIgnoreIds(array $ignoreIds): static
    {
        $this->ignore_ids = $ignoreIds;

        return $this;
    }

    /**
     * @param mixed[]|null $labelIds
     */
    public function setLabelIds(array $labelIds): static
    {
        $this->label_ids = $labelIds;

        return $this;
    }

    public function setOrderDirection($orderDirection): static
    {
        $this->orderDirection = $orderDirection;

        return $this;
    }

    public function setOrderField($orderField): static
    {
        $this->orderField = $orderField;

        return $this;
    }

    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    public function setIncludeDone($includeDone): static
    {
        $this->include_done = $includeDone;

        return $this;
    }
}
