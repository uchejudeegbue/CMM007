<?php
/**
 * Created by PhpStorm.
 * User: 1418349
 * Date: 14/03/2016
 * Time: 10:24
 */
define ('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define ('DB_USERNAME', 'b23520d708dc67');
define ('DB_PASSWORD', '368bae09');
define ('DB_DATABASE','ucheEgbue' );
$db = mysqli_connect (DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>