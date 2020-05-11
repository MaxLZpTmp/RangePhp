<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\margin;

/**
 * Class MarginFactory
 * @package maxlzp\range\margin
 */
class MarginFactory
{
    /**
     * Creates Margin with given value.
     *
     * @param $value
     * @return MarginInterface
     */
    public static function create($value): MarginInterface
    {
       if ($value === -INF)
       {
           return new NegativeInfinityMargin();
       }

       if ($value === INF)
       {
           return new PositiveInfinityMargin();
       }

       if (\is_numeric($value))
       {
           return new NumericMargin($value);
       }

       throw new \InvalidArgumentException("Cannot create Margin: invalid margin value: {$value}");
    }
}