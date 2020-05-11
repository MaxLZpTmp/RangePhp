<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\margin;

/**
 * Class NegativeInfinityMargin
 * @package maxlzp\range\margin
 */
class NegativeInfinityMargin implements MarginInterface
{
    /**
     * @var Margin value is the negative infinity
     */
    private $value = -INF;

    //region MarginInterface

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
     * Should be equal to NegativeInfinityMargin only.
     *
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margins are equal; False otherwise
     */
    public function equals(MarginInterface $other): bool
    {
        return $this->isNegativeInfinityMargin($other);
    }

    /**
     * Checks if this margin value is equal to a given value
     *
     * @param mixed $value Value to compare with
     * @return bool True if margin value and a given value are equal; False otherwise
     */
    public function isEqualToValue($value): bool
    {
        return $value === $this->getValue();
    }

    /**
     * Checks if this margin is greater than other
     * Is not greater than any other margin
     *
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is greater than given margin; False otherwise
     */
    public function isGreaterThan(MarginInterface $other): bool
    {
        return false;
    }

    /**
     * Checks if this margin is greater than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is greater than given value; False otherwise
     */
    public function isGreaterThanValue($value): bool
    {
        return false;
    }

    /**
     * Checks if this margin is greater or equal than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is greater or equal than given margin; False otherwise
     */
    public function isGreaterOrEqualThan(MarginInterface $other): bool
    {
        if ($this->isNegativeInfinityMargin($other)) return true;
        return false;
    }

    /**
     * Checks if this margin is greater or equal than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is greater or equal than given value; False otherwise
     */
    public function isGreaterOrEqualThanValue($value): bool
    {
        return false;
    }

    /**
     * Checks if this margin is less than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is less than given margin; False otherwise
     */
    public function isLessThan(MarginInterface $other): bool
    {
        if ($this->isNegativeInfinityMargin($other)) return false;
        return true;
    }

    /**
     * Checks if this margin is less than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is less than given value; False otherwise
     */
    public function isLessThanValue($value): bool
    {
        return true;
    }

    /**
     * Checks if this margin is less or equal than other
     * @param MarginInterface $other Margin to compare with
     * @return bool True if margin is less or equal than given margin; False otherwise
     */
    public function isLessOrEqualThan(MarginInterface $other): bool
    {
        return true;
    }

    /**
     * Checks if this margin is less or equal than a given value
     * @param mixed $value Value to compare with
     * @return bool True if margin value is less or equal than given value; False otherwise
     */
    public function isLessOrEqualThanValue($value): bool
    {
        return true;
    }

    /**
     * Checks whether $other margin is NegativeInfinityMargin or not
     * @param MarginInterface $other
     * @return bool
     */
    protected function isNegativeInfinityMargin(MarginInterface $other): bool
    {
        if (\is_a($other, self::class)) return true;
        return false;
    }

    //endregion MarginInterface
}