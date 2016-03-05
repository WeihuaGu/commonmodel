<?php
namespace Model;
use \Auryn\Injector;
class Model{
     var $databaseconfig;
     protected $medoodb;
     public function __construct() {
        	$this->getConfig();
		$this->setMedoo();
    }
     function getConfig(){
	$path=__DIR__.'/../../config.json';
	$json_config = file_get_contents($path);
	$config=json_decode($json_config, true);
	$this->databaseconfig=$config['datebase'];

    }
     function  setMedoo(){
        $injector = new Injector;
	$injector->share('medoo');
	$injector->define('medoo', [':options'=>$this->databaseconfig]);
	$this->medoodb = $injector->make('medoo');
    }
     public function dbInfo(){
		print_r($this->medoodb->info());
     }









}
