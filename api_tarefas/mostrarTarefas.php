<?php


require_once('conexao.php');

$sql =  "SELECT * FROM tarefas";
$data = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$json = [];


foreach($data as $row){
    $json[] = $row;
}



header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Content-Type: application/json');
echo json_encode($json);

