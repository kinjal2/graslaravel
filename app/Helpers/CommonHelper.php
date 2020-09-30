<?php
function printLastQuery() {
    ini_set('xdebug.var_display_max_depth', 5);
    ini_set('xdebug.var_display_max_children', 256);
    ini_set('xdebug.var_display_max_data', -1);
    $queries = \DB::getQueryLog();
    dd($queries);
}
if(!function_exists('getYesNo')) {
function getYesNo()
{
    $yesno = [];
    $yesno = ['Y' => "હા", 'N' => "ના"];
    return $yesno;
}
}
if(!function_exists('getMaratialstatus')) {
function getMaratialstatus()
{
    $yesno = [];
    $yesno = ['U' => "Unmarride", 'M' => "Married"];
    return $yesno;
}
}
