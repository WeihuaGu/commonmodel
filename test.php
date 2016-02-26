<?php 
namespace Commonmodel;
use DC\IoC\Container;
require 'vendor/autoload.php';
require 'autoload.php';
$container = new Container();
$container
    ->register(new \Commonmodel\Sns\User\Model\Test())
    ->to('\test');
$test=$container->resolve('\test');
$test->test();

