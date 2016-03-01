<?php 
namespace Commonmodel;
require_once 'CommonModel.php';
$injector = new CommonModel;
$link=[
        'database_type' => 'mysql',
        'database_name' => 'sns',
        'server' => 'localhost',
        'username' => 'root',
        'password' => '1992',
        'charset' => 'utf8'
];
$injector->share('medoo');
$injector->define('medoo', [':options'=>$link]);
$db = $injector->make('medoo');
print_r( $db->info());
