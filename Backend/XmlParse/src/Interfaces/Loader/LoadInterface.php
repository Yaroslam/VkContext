<?php

namespace Backend\XmlParse\src\Interfaces\Loader;

interface LoadInterface
{
    public function load(string $link): bool;
    public function save(string $link): bool;
}