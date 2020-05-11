<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\margin;

use maxlzp\range\exceptions\InvalidNumericMarginValueException;

/**
 * Class NumericMargin
 * @package maxlzp\range\margin
 */
class NumericMargin implements MarginInterface
{
    /**
     * @var
     */
    private $value;

    /**
     * NumericMargin constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->guardNonNumericValue($value);
        $this->value = $this->toNumeric($value); //convert string to number
    }

    //region  MarginInterface


    /**
     * Margin value
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Checks if this margin is equal to other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margins are equal; False otherwise
     */
    public function equals(MarginInterface $other): bool
    {
        if ($this === $other) return true;
        return $this->isEqualToValue($other->getValue());
    }

    /**
     * Checks if this margin value is equal to a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value and a given value are equal; False otherwise
     */
    public function isEqualToValue($value): bool
    {
        $this->guardNonNumericValue($value);
        return $this->getValue() === $this->toNumeric($value);
    }

    /**
     * Checks if this margin is greater than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is greater than given margin; False otherwise
     */
    public function isGreaterThan(MarginInterface $other): bool
    {
        return $this->isGreaterThanValue($other->getValue());
    }

    /**
     * Checks if this margin is greater than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is greater than given value; False otherwise
     */
    public function isGreaterThanValue($value): bool
    {
        $this->guardNonNumericValue($value);
        return $this->getValue() > $this->toNumeric($value);
    }

    /**
     * Checks if this margin is greater or equal than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is greater or equal than given margin; False otherwise
     */
    public function isGreaterOrEqualThan(MarginInterface $other): bool
    {
        return $this->isGreaterOrEqualThanValue($other->getValue());
    }

    /**
     * Checks if this margin is greater or equal than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is greater or equal than given value; False otherwise
     */
    public function isGreaterOrEqualThanValue($value): bool
    {
        $this->guardNonNumericValue($value);
        return $this->getValue() >= $this->toNumeric($value);
    }

    /**
     * Checks if this margin is less than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is less than given margin; False otherwise
     */
    public function isLessThan(MarginInterface $other): bool
    {
        return $this->isLessThanValue($other->getValue());
    }

    /**
     * Checks if this margin is less than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is less than given value; False otherwise
     */
    public function isLessThanValue($value): bool
    {
        $this->guardNonNumericValue($value);
        return $this->getValue() < $this->toNumeric($value);
    }

    /**
     * Checks if this margin is less or equal than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is less or equal than given margin; False otherwise
     */
    public function isLessOrEqualThan(MarginInterface $other): bool
    {
        return $this->isLessOrEqualThanValue($other->getValue());
    }

    /**
     * Checks if this margin is less or equal than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is less or equal than given value; False otherwise
     */
    public function isLessOrEqualThanValue($value): bool
    {
        $this->guardNonNumericValue($value);
        return $this->getValue() <= $this->toNumeric($value);
    }

    //endregion  MarginInterface

    /**
     * @param $value
     * @throws InvalidNumericMarginValueException
     */
    protected function guardNonNumericValue($value)
    {
        if (\is_numeric($value)) return;
        throw new InvalidNumericMarginValueException("Cannot use NumericMargin with non-numeric value.");
    }

    /**
     * Convert value to numeric type
     * @param $numericString
     */
    protected function toNumeric($numericString)
    {
        $this->guardNonNumericValue($numericString);
        return $numericString * 1;
    }
}