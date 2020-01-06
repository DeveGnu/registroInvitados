<?php 

  // define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
  // define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
  // define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
  // define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
  // define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

$DB_HOST = "";
$DB_USER = "";
$DB_PASS = "";
$DB_NAME = "";

/*no sirve*/
  // $conexion = mysql_connect("$DB_HOST", "$DB_USER", "$DB_PASS");
  // $conexion->set_charset("utf8");
   //$db = mysql_select_db(DB_NAME) or die(mysql_error());

/*sirve*/
//mysql_connect($DB_HOST, $DB_USER, $DB_PASS) or die (mysql_error());
//mysql_select_db($DB_NAME) or die(mysql_error());

/*Acepta carecteres especiales en la db */
$conexion = mysql_connect($DB_HOST, $DB_USER, $DB_PASS) or die (mysql_error());
mysql_set_charset("UTF8", $conexion);
mysql_select_db($DB_NAME) or die(mysql_error());

?>
