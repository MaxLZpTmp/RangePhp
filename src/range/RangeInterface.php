<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\range;

use maxlzp\range\margin\MarginInterface;

/**
 * Interface RangeInterface
 * @package maxlzp\range
 */
interface RangeInterface
{
    /**
     * Checks if two ranges are equal
     * @param RangeInterface $other
     * @return bool
     */
    public function equals(RangeInterface $other): bool;

    /**
     * Return a Range that represents a gap between two ranges
     * @param RangeInterface $other Second Range
     * @return RangeInterface Range that represents gat between two Ranges
     */
    public function gap(RangeInterface $other): RangeInterface;

    /**
     * Ending margin of the range
     * @return MarginInterface
     */
    public function getEnd(): MarginInterface;

    /**
     * Starting margin of the range
     * @return MarginInterface
     */
    public function getStart(): MarginInterface;

    /**
     * Range width
     * @return mixed
     */
    public function getWidth();

    /**
     * Check if value belong to the range
     * @param mixed $value Value to test
     * @return bool True if range includes value; false - otherwise</returns>
     */
    public function includesValue($value): bool;

    /**
     * Checks if range includes other range completely
     * @param RangeInterface $other Other range
     * @return bool
     */
    public function includesRange(RangeInterface $other): bool;

    /**
     * Whether Range is empty or not
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Check if ranges overlaps
     * @param RangeInterface $other
     * @return bool
     */
    public function overlaps(RangeInterface $other): bool;

    /**
     * Determines if some range is touching other range
     * (some margin of the range is equal to some other range margin)
     * @param RangeInterface $other Range to test
     * @return bool True if touches; false - otherwise
     */
    public function touches(RangeInterface $other): bool;

    /**
     * Split Range to 2 ranges
     * @param mixed $margin Margin value to split range at.
     * @return array Collection of 2 Ranges
     */
    public function split($margin): array;

    /**
     * Split Range to several ranges
     * @param array $margins Values to split Range at
     * @return array
     */
    public function splitMany(array $margins): array;


}