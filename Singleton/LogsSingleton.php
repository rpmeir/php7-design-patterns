<?php

namespace Singleton;

class LogsSingleton
{
    /** @var self $instance Logs instnace class. */
    protected static LogsSingleton $instance;

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    public static function getInstance(): self
    {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function saveLog(array $data): void
    {
        $fileName = 'logs.txt';
        $previousLogs = [];
        if(filesize($fileName) > 0) {
            $contentFile = file_get_contents($fileName);
            $previousLogs = json_decode($contentFile, true);
        }
        $previousLogs[] = $data;
        $file = fopen($fileName,'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }
}
