<?php
namespace debug;
function ($arr, $die = false){
    echo "<pre>".print_r($arr)."</pre>";
    if($die)die();
}