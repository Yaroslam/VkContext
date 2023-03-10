<?php


namespace Backend\TimeToWordConvert\src;
use http\Params;

require '../vendor/autoload.php';
require 'TimeToWordConvertinginterface.php';

class TimeToWordConverter implements TimeToWordConvertinginterface
{
    private int $minInHour = 60;
    private array $hours = [
        'half' => [1 => "второго", 2 => 'третьего', 3 => 'червертого',
                   4 => 'пятого', 5 => 'шестого', 6 => 'седьмого',
                   7 => 'восьмого', 8 => "девятого", 9 => "десятого",
                   10 => "одиннадцатого", 11 => "двенадцатого", 12 => "первого"],
        "beforeHalf" => [1 => "часа", 2 => "двух", 3 => "трех",
                         4 => "четырех", 5 => "пяти", 6 => "шести",
                         7 => "семи", 8 => "восьми", 9 => "девяти",
                         10 => "десяти", 11 => "одиннадцати", 12 => "двенадцати"],
        "afterHalf" => [1 => "двух", 2 => "трех", 3 => "четырех",
                        4 => "пяти", 5 => "шести", 6 => "семи",
                        7 => "восьми", 8 => "девяти", 9 => "десяти",
                        10 => "одиннадцати", 11 => "двенадцати", 12 => "до часу"],
        "currentHour" => [1 => "Один час", 2 => "Два часа", 3 => "Три часа",
                          4 => "Четыре часа", 5 => "Пять часов", 6 => "Шесть часов",
                          7 => "Семь часов", 8 => "Восемь часов", 9 => "Девять часов",
                          10 => "Десять чаосв", 11 => "Одиннадцать часов", 12 => "Двенадцать часов"]];

    private array $minutes = [
        "afterHalf" => [1 => "Одна минута", 2 => "Две минуты", 3 => "Три минуты",
            4 => "Чертыре минуты", 5 => "Пять минут", 6 => "Шесть минут",
            7 => "Семь минут", 8 => "Восемь минут", 9 => "Девять минут",
            10 => "Десять миннут", 11 => "Одиннадцать минут", 12 => "Двенадцать минут",
            13 => "Тринадцать минут", 14 => "Четырнадцать минут", 15 => "Пятнадцать минут",
            16 => "Шеснадцать минут", 17 => "Семнадцать минут", 18 => "Восемнадцать минут",
            19 => "Девятнацать минут", 20 => "Двадцать минут", 21 => "Двадцать одна минута",
            22 => "Двадцать две минуты", 23 => "Двадцать три минуты", 24 => "Двадцать четыре минуты",
            25 => "Двадцать пять минут", 26 => "Дватцать шесть минут", 27 => "Двадцать семь минут",
            28 => "Двадцать восемь минут", 29 => "Двадцать девять минут"],

        "beforeHalf" => [1 => "Одна минута", 2 => "Две минуты", 3 => "Три минуты",
            4 => "Чертыре минуты", 5 => "Пять минут", 6 => "Шесть минут",
            7 => "Семь минут", 8 => "Восемь минут", 9 => "Девять минут",
            10 => "Десять миннут", 11 => "Одиннадцать минут", 12 => "Двенадцать минут",
            13 => "Тринадцать минут", 14 => "Четырнадцать минут", 15 => "Пятнадцать минут",
            16 => "Шеснадцать минут", 17 => "Семнадцать минут", 18 => "Восемнадцать минут",
            19 => "Девятнацать минут", 20 => "Двадцать минут", 21 => "Двадцать одна минута",
            22 => "Двадцать две минуты", 23 => "Двадцать три минуты", 24 => "Двадцать четыре минуты",
            25 => "Двадцать пять минут", 26 => "Дватцать шесть минут", 27 => "Двадцать семь минут",
            28 => "Двадцать восемь минут", 29 => "Двадцать девять минут"]
    ];

    public function convert(int $hour, int $minutes): string
    {
        $time = '';

        $time .= $hour . ":";
        if ($minutes < 10)
        {
            $time .= "0".$minutes;
        } else
        {
            $time .= $minutes;
        }

        $time .= " - ";

        switch ($minutes){
            case 0:
                $time .= $this->hours['currentHour'][$hour];
                break;
            case 30:
                $time .='Половина '.$this->hours['half'][$hour];
                break;
            case 15:
                $time .= "Четверть ". $this->hours['half'][$hour];
                break;
            case $minutes < 30:
                $time .= $this->minutes['beforeHalf'][$minutes] . " после ". $this->hours['beforeHalf'][$hour];
                break;
            case $minutes > 30:
                $time .= $this->minutes['afterHalf'][$this->minInHour - $minutes] .  " до " . $this->hours['afterHalf'][$hour];
                break;
        }

        return $time;
    }
}