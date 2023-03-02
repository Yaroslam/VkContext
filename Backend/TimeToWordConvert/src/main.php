<?php


use Backend\TimeToWordConvert\src\TimeToWordConverter;

require '../vendor/autoload.php';
require 'TimeToWordConverter.php';

$timeConvertor = new TimeToWordConverter();
var_dump($timeConvertor->convert(7,0));
var_dump($timeConvertor->convert(7,1));
var_dump($timeConvertor->convert(7,3));
var_dump($timeConvertor->convert(7,12));
var_dump($timeConvertor->convert(7,15));
var_dump($timeConvertor->convert(7,22));
var_dump($timeConvertor->convert(7,30));
var_dump($timeConvertor->convert(7,35));
var_dump($timeConvertor->convert(7,41));
var_dump($timeConvertor->convert(7,56));
var_dump($timeConvertor->convert(7,59));


