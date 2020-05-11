<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\range;

use maxlzp\range\margin\MarginInterface;

/**
 * Class Range
 * @package maxlzp\range\range
 */
class Range implements RangeInterface
{
    #region constants
    const INCLUDE_BOTH = 0;
    const INCLUDE_START = 1;
    const INCLUDE_END = 2;
    #endregion constants

    #region fields

    /**
     * @var MarginInterface Range-start margin
     */
    protected $start;

    /**
     * @var MarginInterface Range-end margin
     */
    protected $end;

    /**
     * @var int Defines which margin is included to the range
     */
    protected $marginsIncludeMode;


    #endregion fields

    #region constructor
    /**
     * Range constructor.
     * @param $start
     * @param $end
     * @param int $mode Which margin is included to the range created
     */
    protected function __construct($start, $end, $mode = Range::INCLUDE_BOTH)
    {
        $this->start = $start;
        $this->end = $end;
        $this->marginsIncludeMode = $mode;
    }
    #endregion constructor

    #region factory methods

    /**
     * Create range with values between given values
     *
     * @param $start
     * @param $end
     * @param int $mode Which margin is included to the range created
     * @return RangeInterface
     */
    public static function between($start, $end, $mode = Range::INCLUDE_BOTH): RangeInterface
    {
    }

    /**
     * Create range with values that are greater than given value
     *
     * @param $value
     * @return RangeInterface
     */
    public static function greaterThan($value): RangeInterface
    {

    }

    /**
     * Create range with values that are greater or equal than given value
     *
     * @param $value
     * @return RangeInterface
     */
    public static function greaterOrEqualThan($value): RangeInterface
    {

    }

    /**
     * Create range with values that are less than given value
     *
     * @param $value
     * @return RangeInterface
     */
    public static function lessThan($value): RangeInterface
    {

    }

    /**
     * Create range with values that are less or equal than given value
     *
     * @param $value
     * @return RangeInterface
     */
    public static function lessOrEqualThan($value): RangeInterface
    {

    }

    #endregion factory methods

    #region RangeInterface implementation

    /**
     * Checks if two ranges are equal
     * @param RangeInterface $other
     * @return bool
     */
    public function equals(RangeInterface $other): bool
    {
        // TODO: Implement equals() method.
    }

    /**
     * Return a Range that represents a gap between two ranges
     * @param RangeInterface $other Second Range
     * @return RangeInterface Range that represents gat between two Ranges
     */
    public function gap(RangeInterface $other): RangeInterface
    {
        // TODO: Implement gap() method.
    }

    /**
     * Ending margin of the range
     * @return MarginInterface
     */
    public function getEnd(): MarginInterface
    {
        // TODO: Implement getEnd() method.
    }

    /**
     * Starting margin of the range
     * @return MarginInterface
     */
    public function getStart(): MarginInterface
    {
        // TODO: Implement getStart() method.
    }

    /**
     * Range width
     * @return mixed
     */
    public function getWidth()
    {
        // TODO: Implement getWidth() method.
    }

    /**
     * Check if value belong to the range
     * @param mixed $value Value to test
     * @return bool True if range includes value; false - otherwise</returns>
     */
    public function includesValue($value): bool
    {
        // TODO: Implement includesValue() method.
    }

    /**
     * Checks if range includes other range completely
     * @param RangeInterface $other Other range
     * @return bool
     */
    public function includesRange(RangeInterface $other): bool
    {
        // TODO: Implement includesRange() method.
    }

    /**
     * Whether Range is empty or not
     * @return bool
     */
    public function isEmpty(): bool
    {
        // TODO: Implement isEmpty() method.
    }

    /**
     * Check if ranges overlaps
     * @param RangeInterface $other
     * @return bool
     */
    public function overlaps(RangeInterface $other): bool
    {
        // TODO: Implement overlaps() method.
    }

    /**
     * Determines if some range is touching other range
     * (some margin of the range is equal to some other range margin)
     * @param RangeInterface $other Range to test
     * @return bool True if touches; false - otherwise
     */
    public function touches(RangeInterface $other): bool
    {
        // TODO: Implement touches() method.
    }

    /**
     * Split Range to 2 ranges
     * @param mixed $margin Margin value to split range at.
     * @return array Collection of 2 Ranges
     */
    public function split($margin): array
    {
        // TODO: Implement split() method.
    }

    /**
     * Split Range to several ranges
     * @param array $margins Values to split Range at
     * @return array
     */
    public function splitMany(array $margins): array
    {
        // TODO: Implement splitMany() method.
    }

    #endregion RangeInterface implementation

}