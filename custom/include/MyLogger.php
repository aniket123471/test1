<?php
class MyLogger {
    public static function write($message) {
        $logFile = 'custom/MyLogger.log';
        file_put_contents($logFile, date('Y-m-d H:i:s') . " - $message\n", FILE_APPEND);
    }
}
