<?php

namespace Backend\XmlParse\src\Classes\Loader;

use Backend\XmlParse\src\Interfaces\Loader\LoadInterface;

class LoaderFubric
{
//    создает необходимый лоадер, в зависимости от переданного loadType
    public static function createLoader(string $loadType): LoadInterface
    {
        $createdLoader = new Loader();
        return $createdLoader;
    }

}