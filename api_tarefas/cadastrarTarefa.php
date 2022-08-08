<?php
require_once('conexao.php');

$descricao = 'sair de casa';
$status = 1;

$data = [
    'descricao_terefa' => $descricao,
    'status_tarefas' => $status,
];


$sql = "INSERT INTO tarefas (descricao_terefa, status_tarefas) 
        VALUES (:descricao_terefa, :status_tarefas)";

$con->prepare($sql)->execute($data);
