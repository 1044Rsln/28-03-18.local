<?php

spl_autoload_register(function ($class){
     $classFileName = 'vendor' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($classFileName)) {
        include_once $classFileName;
        return TRUE;
    }
    return FALSE;
});

//$testObj= new Test();
//$testObj->name = 'vasya';
//var_dump($testObj);
//echo ($testObj->name);

$human = new Human('vasya', 'pupkin', 22, 'troickaya');
echo $human;

$student  =  new Student ('kolya','vasin',33,'bankovskaya', 'el-sds', 'sd@dsf.com'); 
echo $student;