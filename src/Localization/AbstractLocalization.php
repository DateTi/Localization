<?php
declare(strict_types=1);

namespace DateTi\Localization;

use DateTime;
use DateTimeInterface;

abstract class AbstractLocalization implements LocalizationInterface
{
    public function getInflexionDay(int $dayOfWeek, int $inflexion): string
    {
        return $this->getInflexionOfDay($dayOfWeek)[$inflexion];
    }

    private function getDifference()
    {
        return $this->getConfig()['difference'];
    }

    public function getDayDifference(DateTimeInterface $dateTime): string
    {
        $curDate = new DateTime();
        $date = clone $dateTime;

        $date->setTime(0, 0, 0, 0);
        $curDate->setTime(0, 0, 0, 0);

        $diff = $date->diff($curDate)->days;
        $local = $this->getDifference();

        return Helper::dateDifferenceTranslation($date, $curDate, $diff, $local);
    }

    private function getAts()
    {
        return $this->getConfig()['at'];
    }

    public function getAt(int $dayOfWeek): string
    {
        return $this->getAts()[$dayOfWeek];
    }

    public function getInflexionOfDay(int $dayOfWeek): array
    {
        return $this->getInflexionDays()[$dayOfWeek];
    }

    private function getInflexionDays()
    {
        return $this->getInflexions()['days'];
    }

    private function getInflexions()
    {
        return $this->getConfig()['inflexion'];
    }

    abstract protected function getConfig(): array;
}
