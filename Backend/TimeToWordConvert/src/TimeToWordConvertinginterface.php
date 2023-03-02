<?php
namespace Backend\TimeToWordConvert\src;

require '../vendor/autoload.php';


interface TimeToWordConvertinginterface
{
    public function convert(int $hour, int $minutes): string;
}
