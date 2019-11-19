<?php
declare(strict_types=1);

namespace DateTi\Localization\Days;

interface DifferenceInterface
{
    public function getBefore(): string;
    public function getAfter(): string;
    public function getYesterday(): string;
    public function getToday(): string;
    public function getTomorrow(): string;
    public function getAfterTomorrow(): string;
    public function getOneDay(): string;
    public function getTwoDays(): string;
    public function getFiveDays(): string;
}
