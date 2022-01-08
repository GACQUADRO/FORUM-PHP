<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=php_exam_db;charset=utf8;', 'root','');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' / $e->getMessage());
}

