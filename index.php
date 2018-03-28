<?php

spl_autoload_register(function ($class){
     $classFileName = 'vendor' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($classFileName)) {
        include_once $classFileName;
        return TRUE;
    }
    return FALSE;
});

$testObj= new Test();
$testObj->name = 'vasya';
var_dump($testObj);
echo ($testObj->name);

