<?php

namespace Backend\XmlParse\src\Interfaces\Notify;

interface NotifyInterface
{
    public function notify(string $notification): bool;
}