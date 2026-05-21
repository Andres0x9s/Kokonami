<?php

$serverName = "emprendedores-sql-server.database.windows.net";

$connectionOptions = array(
    "Database" => "EmprendedoresDB",
    "Uid" => "adminuser",
    "PWD" => "pepo123@"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if($conn === false){
    die(print_r(sqlsrv_errors(), true));
}

?>