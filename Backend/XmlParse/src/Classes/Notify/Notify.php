<?php

namespace Backend\XmlParse\src\Classes\Notify;
use \Backend\XmlParse\src\Interfaces\Notify\NotifyInterface;

class Notify implements NotifyInterface
{
//  адрес электронной почты, идентификатор диалога в тг и т.п.
    private string $chanel;

    public function __construct($chanel)
    {
        $this->chanel = $chanel;
    }

//    отправляет в $chanel сообщение notification, возвращает true, если отправка удалась, иначе false
    public function notify(string $notification): bool
    {
        return true;
    }
}