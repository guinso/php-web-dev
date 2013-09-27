<?php
define('ROOT_DIR', dirname(__FILE__));

define('CONFIG_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'config');
define('APP_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app');
define('LIB_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'lib');

define('MODULE_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'module');
define('MODEL_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'model');

//DEBUGGING TOOLS
require_once(LIB_DIR.DIRECTORY_SEPARATOR.'krumo'.DIRECTORY_SEPARATOR.'class.krumo.php');

krumo(array(1,2,3));

//require_once(LIB_DIR . DIRECTORY_SEPARATOR . 'propelorm/runtime/lib/Propel.php');

//Propel::init(APP_DIR . '/orm/myreka_erp/build/conf/myreka_erp-conf.php');
//set_include_path(API_ROOT_DIR . '/orm/myreka_erp/build/classes' . PATH_SEPARATOR . get_include_path());

/*
try{
	$strcon = "firebird:dbname=192.168.56.101:C:\Program Files\Firebird\Firebird_1_5\examples\EMPLOYEE.FDB";
	$conn = new PDO($strcon, 'SYSDBA', 'masterkey');
	
	//WRITE
	//$sql = 'INSERT INTO CUSTOMER (CUST_NO, CUSTOMER, COUNTRY) VALUES (1017, \'Care Bear\', \'Russia\')';
	
	//UPDATE
	$sql = "UPDATE CUSTOMER SET CUSTOMER='Azunya nyan~' WHERE CUST_NO=1018";
	
	$smt = $conn->prepare($sql);
	
	if(!empty($smt)) {
		$raw = $smt->execute();
		
		if(!$raw) {
			$errMsg = $conn->errorInfo();
			foreach($errMsg as $msg) {
				echo "$msg <br/>";
			}
		}
		
		print ($raw? 'Success': 'Fail '.$conn->errorInfo()) . '<br/>';
	} else {
		echo 'Preparation fail<br/>';
	}
	
	
	//READ
	
	$sql = 'select * from CUSTOMER';
	$raw = $conn->query($sql);
	foreach($raw as $k => $row) {
		print $row['CUST_NO'].'&nbsp;'.$row['CUSTOMER'].'&nbsp;'.$row['COUNTRY'].'<br/>';
	}
	

} catch(Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
*/
?>
