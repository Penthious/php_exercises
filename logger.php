<?php



//YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE

function logMessage($logLevel, $message) {
    $currentYear  = date('Y');
    $currentMonth = date('m');
    $currentDay   = date('d');

    $loggedHour   = date('g');
    $loggedMinute = date('i');
    $loggedSecond = date('s');

    $filename = "log--{$currentYear}--{$currentMonth}--{$currentDay}.log";
    $handle = fopen($filename, 'a');

    fwrite($handle, $currentYear . '-' . $currentMonth . '-' . $currentDay . ' ' . $loggedHour . ':' . $loggedMinute . ':' . $loggedSecond .' ' . $message .PHP_EOL);
    fclose($handle);
}

function logError($message){
    return logMessage("ERROR", $message);
}

function logInfo($message){
    return logMessage("INFO", $message);
}

echo logError('failed');
echo logInfo('log in');
