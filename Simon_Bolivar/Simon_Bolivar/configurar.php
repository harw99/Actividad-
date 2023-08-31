<?php

$dsn = "mysql:dbname=estudiantes;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e){
    echo "falhou: ".$e->getMessage();
}
?>
