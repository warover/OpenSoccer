<?php

class Log {

    public static function logToErrFile($err) {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $file = dirname(__FILE__) . '/'.$date.'.txt';
        
        $logTxt = '['.$time.'] >> '.$err;
        
        file_put_contents($file, $logTxt, FILE_APPEND | LOCK_EX);
    }
    
}