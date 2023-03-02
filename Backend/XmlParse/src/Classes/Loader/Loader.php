<?php

namespace Backend\XmlParse\src\Classes\Loader;
use \Backend\XmlParse\src\Interfaces\Loader\LoadInterface;

//сохраняет и загружает фотографии
class Loader implements LoadInterface
{
//возможно наличие ситуативных полей для хранения неоюходимой информации для лоадера
//адрес бд, апи ключ для облака и т.д.



// скачивает по link данные, возвращает true, если скачивание удалась, иначе false
    public function load(string $link): bool
    {
        return true;
    }

    // сохраняет данные по адресу link, возвращает true, если сохранение удалась, иначе false
    public function save(string $link): bool
    {
        return true;
    }
}