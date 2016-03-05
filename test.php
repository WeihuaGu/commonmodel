<?php 
namespace Commonmodel;
use Model\Model;
use  \Auryn\Injector;
require_once 'CommonModel.php';
$injector = new Injector;
$model= $injector->make('Model\Model');
$model->dbInfo();
