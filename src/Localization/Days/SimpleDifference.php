<?php
declare(strict_types=1);

namespace DateTi\Localization\Days;

class SimpleDifference implements DifferenceInterface
{
    /** @var string */
    private $before;

    /** @var string */
    private $after;

    /** @var string */
    private $yesterday;

    /** @var string */
    private $today;

    /** @var string */
    private $tomorrow;

    /** @var string */
    private $afterTomorrow;

    /** @var string */
    private $oneDay;

    /** @var string */
    private $twoDays;

    /** @var string */
    private $fiveDays;

    public function __construct(
        string $before,
        string $after,
        string $yesterday,
        string $today,
        string $tomorrow,
        string $afterTomorrow,
        string $oneDay,
        string $twoDays,
        string $fiveDays
    ) {
        $this->before = $before;
        $this->after = $after;
        $this->yesterday = $yesterday;
        $this->today = $today;
        $this->tomorrow = $tomorrow;
        $this->afterTomorrow = $afterTomorrow;
        $this->oneDay = $oneDay;
        $this->twoDays = $twoDays;
        $this->fiveDays = $fiveDays;
    }

    /**
     * @return string
     */
    public function getBefore(): string
    {
        return $this->before;
    }

    /**
     * @return string
     */
    public function getAfter(): string
    {
        return $this->after;
    }

    /**
     * @return string
     */
    public function getYesterday(): string
    {
        return $this->yesterday;
    }

    /**
     * @return string
     */
    public function getToday(): string
    {
        return $this->today;
    }

    /**
     * @return string
     */
    public function getTomorrow(): string
    {
        return $this->tomorrow;
    }

    /**
     * @return string
     */
    public function getAfterTomorrow(): string
    {
        return $this->afterTomorrow;
    }

    /**
     * @return string
     */
    public function getOneDay(): string
    {
        return $this->oneDay;
    }

    /**
     * @return string
     */
    public function getTwoDays(): string
    {
        return $this->twoDays;
    }

    /**
     * @return string
     */
    public function getFiveDays(): string
    {
        return $this->fiveDays;
    }
}
