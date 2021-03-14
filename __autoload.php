<?php

include_once('vendor/cibt/__autoload.php');

function framework_autoload($class){
    $class=str_replace('\\','/',$class);
    $path=$_SERVER['DOCUMENT_ROOT'].'/'.$class.'.php';
    if(file_exists($path)){
        require_once $path;
    }else{
        $class=str_replace('\\','/',$class);
        require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/cibt/src/'.$class.'.php');
    
    }

    
}



spl_autoload_register('framework_autoload');