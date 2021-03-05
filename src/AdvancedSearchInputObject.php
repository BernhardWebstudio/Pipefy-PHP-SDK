<?php

namespace GraphQL\SchemaObject;

class AdvancedSearchInputObject extends InputObject
{
    protected $field;

    protected $operator;

    protected $value;

    /**
     * @var mixed[]|null
     */
    protected $AND;

    /**
     * @var mixed[]|null
     */
    protected $OR;

    public function setField($field): static
    {
        $this->field = $field;

        return $this;
    }

    public function setOperator($operator): static
    {
        $this->operator = $operator;

        return $this;
    }

    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param mixed[]|null $aND
     */
    public function setAND(array $aND): static
    {
        $this->AND = $aND;

        return $this;
    }

    /**
     * @param mixed[]|null $oR
     */
    public function setOR(array $oR): static
    {
        $this->OR = $oR;

        return $this;
    }
}
