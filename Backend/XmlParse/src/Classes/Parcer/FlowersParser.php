<?php

namespace Backend\XmlParse\src\Classes\Parcer;

use Backend\XmlParse\src\Classes\Logger\Logger;
use Backend\XmlParse\src\Interfaces\DataSaver\DataSaverInterface;
use Backend\XmlParse\src\Interfaces\Loader\LoadInterface;
use Backend\XmlParse\src\Interfaces\Notify\NotifyInterface;

class FlowersParser
{
    public function __construct($document, LoadInterface $loader, DataSaverInterface $dataSaver,
                                NotifyInterface $notify, Logger $logger)
    {
        $this->logger = $logger;
        $this->document = $document;
        $this->notify = $notify;
        $this->loader = $loader;
        $this->dataSaver = $dataSaver;
    }

    public function parseData():void
    {
//        логика прасинга $this->document, скачивания фотографий их загрузка с помощью $this->loader,
//         сохранения данных парсинга с помощью $this->dataSaver
//          логгирования с помощью $this->logger
//          уведомлений с помощью $this->notify
    }


}