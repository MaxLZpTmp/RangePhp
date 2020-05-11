<?php
/**
 * User: MaxLZp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\range\range;

/**
 * Class MarginsInclusionMode
 * @package maxlzp\range\range
 */
final class MarginsInclusionMode
{
    #region constants
    const INCLUDE_NONE = 0;
    const INCLUDE_START = 1;
    const INCLUDE_END = 2;
    const INCLUDE_BOTH = 3;
    #endregion constants

    #region fields
    /**
     * @var int Inclusion mode
     */
    protected $mode;
    #endregion fields

    #region constructor
    /**
     * MarginsInclusionMode constructor.
     * @param int $mode
     */
    private function __construct($mode)
    {
        $this->mode = $mode;
    }
    #endregion constructor

    #region factory methods

    /**
     * Create mode with both margins included
     *
     * @return MarginsInclusionMode
     */
    public static function BOTH(): MarginsInclusionMode
    {
        return new self(self::INCLUDE_BOTH);
    }

    /**
     * Create mode with end-margin included
     *
     * @return MarginsInclusionMode
     */
    public static function END(): MarginsInclusionMode
    {
        return new self(self::INCLUDE_END);
    }

    /**
     * Create mode with end-margin included
     *
     * @return MarginsInclusionMode
     */
    public static function NONE(): MarginsInclusionMode
    {
        return new self(self::INCLUDE_NONE);
    }

    /**
     * Create mode with start-margin included
     *
     * @return MarginsInclusionMode
     */
    public static function START(): MarginsInclusionMode
    {
        return new self(self::INCLUDE_END);
    }
    #endregion factory methods

    /**
     * Checks if both margins are included in the range
     * @return bool
     */
    public function areBothIncluded(): bool
    {
        return $this->mode === self::INCLUDE_BOTH;
    }

    /**
     * Checks if none margins are included in the range
     * @return bool
     */
    public function areNoneIncluded(): bool
    {
        return $this->mode === self::INCLUDE_NONE;
    }

    /**
     * Checks if start margin is included in the range
     * @return bool
     */
    public function isStartIncluded(): bool
    {
        return $this->mode === self::INCLUDE_BOTH
            || $this->mode === self::INCLUDE_START;
    }

    /**
     * Checks if end margin is included in the range
     * @return bool
     */
    public function isEndIncluded(): bool
    {
        return $this->mode === self::INCLUDE_BOTH
            || $this->mode === self::INCLUDE_END;
    }
}