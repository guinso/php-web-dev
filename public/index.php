<?php
define('ROOT_DIR', dirname(dirname(__FILE__)));

define('CONFIG_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'config');
define('APP_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app');
define('LIB_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'lib');

define('MODULE_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'module');
define('MODEL_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'model');

//require_once(LIB_DIR . DIRECTORY_SEPARATOR . 'propelorm/runtime/lib/Propel.php');

//Propel::init(APP_DIR . '/orm/myreka_erp/build/conf/myreka_erp-conf.php');
//set_include_path(API_ROOT_DIR . '/orm/myreka_erp/build/classes' . PATH_SEPARATOR . get_include_path());

$strcon = "firebird:dbname=192.168.1.4:C:\Program Files\Firebird\Firebird_1_5\examples\EMPLOYEE.FDB";
$conn = new PDO($strcon, 'SYSDBA', 'masterkey');
$sql = 'select * from employee';
$raw = $conn->query($sql);
foreach($raw as $k => $row) {
	print $row['EMP_NO'] . '<br/>';
}
?>
