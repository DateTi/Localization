<?php
declare(strict_types=1);

namespace DateTi\Localization;

use DateTimeInterface;

interface LocalizationInterface
{
    public function getInflexionDay(int $dayOfWeek, int $inflexion): string;

    public function getInflexionOfDay(int $dayOfWeek): array ;

    public function getAt(int $dayOfWeek): string;

    public function getDayDifference(DateTimeInterface $dateTime): string;
}
