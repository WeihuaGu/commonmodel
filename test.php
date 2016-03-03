<?php 
namespace Commonmodel;
require_once 'CommonModel.php';
$injector = new CommonModel;
$db = $injector->getMedoo();
print_r( $db->info());
