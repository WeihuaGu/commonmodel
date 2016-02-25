<?php
//autoload.php

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    $fileclass='';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = './' . str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileclass=$fileName;
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    if (is_readable($fileName)) {
        require $fileName;
    }
    $fileclass .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.class.php';
    if (is_readable($fileclass)) {
        require $fileclass;
    }
    require 'vendor/autoload.php';
}

spl_autoload_register('autoload');
