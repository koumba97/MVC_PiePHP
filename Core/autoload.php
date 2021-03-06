<?php 

function autoloader($class_name) {

    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

    $core_file= '../../..';
    $src_file='../../../src';
    $ctrl_file='../../../src/Controller';
    $model_file='../../../src/Model';
    
    if (file_exists("$core_file/$class_name.php")){
        include("$core_file/$class_name.php");
    }

    elseif(file_exists("$src_file/$class_name.php")){
        include("$src_file/$class_name.php");
    }

    elseif(file_exists("$ctrl_file/$class_name.php")){
        include("$ctrl_file/$class_name.php");
    }

    elseif(file_exists("$model_file/$class_name.php")){
        include("$model_file/$class_name.php");
    }
    
}

spl_autoload_register('autoloader');