<?php
//require __DIR__.'/app/controller/home.php';
/*
spl_autoload_register(function ($className){
    $classFile= __DIR__.'/app/helper/'.strtolower($className).'.php'; 
    if (file_exists($classFile)){
        require $classFile;
    }
});

function autoloadcontroller($className){
    $classFile= __DIR__.'/app/controller/'.strtolower($className).'.php'; 
    if (file_exists($classFile)){
        require $classFile;
    }
}
spl_autoload_register('autoloadcontroller');
*/


function autoloadclass($className){
     $className= strtolower(str_replace('\\','/',$className)).'.php'; 
     require $className;
}
spl_autoload_register('autoloadclass');

$home = new App\Controller\Home;
echo $home->test();

$test= new App\helper\Test;

?>