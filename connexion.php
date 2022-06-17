<?php 
    require_once 'config.php';
try {

    $obj_pdo = new PDO("mysql:host=localhost;dbname=mybd", DB_USERNAME, DB_PASS, $option);
    echo 'Connecté...';

} catch (PDOException $e) {
    die($e->getMessage());
}

?>