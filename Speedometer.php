<?php


class Speedometer
{
    const TO_MILES = 0.621371;
    const TO_KM = 1.609344;

    public static function convertKmToMiles(int $speed)
    {
        return $speed * self::TO_MILES. ' miles/h';
    }

    public static function convertMilesToKm(int $speed)
    {
        return $speed * self::TO_KM . ' Km/h';
    }
}