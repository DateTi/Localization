<?php
declare(strict_types = 1);

namespace DateTi\Localization;

use DateTimeInterface;

class Helper
{
    public static function dateDifferenceTranslation(
        DateTimeInterface $date,
        DateTimeInterface $curDate,
        int $diff,
        array $local
    ): string {
        if ($date >= $curDate) {
            return self::getDifferenceAfter($diff, $local);
        }

        return self::getDifferenceBefore($diff, $local);
    }

    private static function getDifferenceAfter(int $diff, array $local): string
    {
        if ($diff === 0) {
            return $local['today'];
        }

        if ($diff === 1) {
            return $local['tomorrow'];
        }

        if ($diff === 2) {
            return $local['afterTomorrow'];
        }

        if ($diff < 5) {
            return $local['after'] . ' ' . $diff . ' ' . $local['twoDays'];
        }

        return self::getDifferenceDefault($diff, $local);
    }

    private static function getDifferenceBefore(int $diff, array $local): string
    {
        if ($diff === 1) {
            return $local['yesterday'];
        }

        return $local['before'] . ' ' . $diff . ' ' . $local['twoDays'];
    }

    private static function getDifferenceDefault(int $diff, array $local): string
    {
        return $local['after'] . ' ' . $diff . ' ' . $local['fiveDays'];
    }
}
