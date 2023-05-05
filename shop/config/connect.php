<?php
$dbUser = 'root';
$dbPass = '';
$dbAddress = 'localhost' /* local ip address = 127.0.0.1 */;
$dbName = 'shoposasu';

$pdoConnect = new PDO('mysql:host='.$dbAddress.';dbname='.$dbName, $dbUser,$dbPass);
$pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>