<?php

namespace Backend\XmlParse\src\Interfaces\DataSaver;

interface DataSaverInterface
{
    public function saveData($data): bool;
    public function connectToSavePlace(string $savePlace): bool;

}