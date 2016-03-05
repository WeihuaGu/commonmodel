<?php
namespace Commonmodel;
use \Auryn\Injector;
require_once 'vendor/autoload.php';
class CommonModel extends  Injector {
    var $db;
    var $databaseconfig;
    function __construct() {
      parent::__construct();
      $this->getConfig();
    }
    function getDatabaseConfig(){
	return $this->databaseconfig;
    }
    function getConfig(){
	$json_config = file_get_contents('config.json');
	$config=json_decode($json_config, true);
	$this->databaseconfig=$config['datebase'];

    }
    function  getMedoo(){
	$this->share('medoo');
	$this->define('medoo', [':options'=>$this->databaseconfig]);
	$this->db = $this->make('medoo');
	return $this->db;
    }
    function getPDO(){
	return $this->db->pdo;
    }
}
