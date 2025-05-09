<?php
$serverName = "172.16.3.58";
$connectionOptions = array(
    "Database" => "sistemalogin",
    "Uid" => "sa",
    "PWD" => "UNIDEV01.,",
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>
