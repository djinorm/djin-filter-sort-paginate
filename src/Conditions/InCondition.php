<?php
/**
 * @author Timur Kasumov (aka XAKEPEHOK)
 * Datetime: 09.05.2018 22:32
 */

namespace DjinORM\Components\Pagination\Conditions;


class InCondition implements ConditionInterface
{

    /**
     * @var string
     */
    private $field;
    /**
     * @var array
     */
    private $values;

    public function __construct(string $field, array $values)
    {
        $this->field = $field;
        $this->values = $values;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param array $values
     */
    public function setValues(array $values): void
    {
        $this->values = $values;
    }

}