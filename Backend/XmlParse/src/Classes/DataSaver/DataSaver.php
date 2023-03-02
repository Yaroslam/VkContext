<?php

namespace Backend\XmlParse\src\Classes\DataSaver;
use \Backend\XmlParse\src\Interfaces\DataSaver\DataSaverInterface;



//сохраняет распаршенные данные
class DataSaver implements DataSaverInterface
{
//    сохраняет $data в $savePlace при удачном сохранении возвращает истину, иначе ложь
    public function saveData($data): bool
    {
        return true;
    }
//    открывает соединение с $savePlace (файл, бд, что-то еше) при удачном открытии возвращает истину, иначе ложь
    public function connectToSavePlace(string $savePlace): bool
    {
        return true;
    }
}