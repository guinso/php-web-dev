<?php 
# inclue the ActiveRecord library
require_once LIB_DIR . DIRECTORY_SEPARATOR .'activerecord/ActiveRecord.php';
 
ActiveRecord\Config::initialize(function($cfg)
{
  $cfg->set_model_directory(MODEL_DIR);
  $cfg->set_connections(array('development' =>
	'firebird://SYSDBA:421109@localhost/var/lib/firebird/2.5/data/employee.fdb'));
    //'firebird:host=localhost;dbname=/var/lib/firebird/2.5/data/employee.fdb;user=SYSDBA;password=421109'));
});
 
 ?>