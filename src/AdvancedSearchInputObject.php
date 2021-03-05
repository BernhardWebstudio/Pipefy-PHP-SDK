<?php

namespace GraphQL\SchemaObject;

class AdvancedSearchInputObject extends InputObject
{
    protected $field;

    protected $operator;

    protected $value;

    protected $AND;

    protected $OR;

    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function setAND(array $aND)
    {
        $this->AND = $aND;

        return $this;
    }

    public function setOR(array $oR)
    {
        $this->OR = $oR;

        return $this;
    }
}
