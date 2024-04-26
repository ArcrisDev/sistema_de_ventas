<?php
$URL="http://localhost/www.sistemadeventas.com";
const SERVIDOR = 'localhost';
const USUARIO = 'root';
const PASSWORD = '';
const BD = 'sistemadeventas';

$servidor ="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión ala base de datos fue con exito";
}catch (PDOException $e){
    echo "Error al conectar ala base de datos";
}
