<?php
use Session;
Use App\Quarter;

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
if(!function_exists('getBasicPay')) {
    function getBasicPay()
    { 
        $basic_pay=Session::get('basic_pay');
        $quarterselect= Quarter::where('bpay_from', '<=',$basic_pay)->where('bpay_to', '>=',$basic_pay)->get();
        $quarterdetails = [];
        foreach($quarterselect as $q)
        { 
            $quarterdetails[$q->quartertype] =$q->quartertype_g;
        }
    return $quarterdetails;
    }
}
    
