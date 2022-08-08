<?php

    $host = "localhost";
    $dbname =  'banco_tarefas';
    $user = 'root';
    $pwd = '';


    try{
        $con = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pwd);
        return $con;
    }catch (PDOException $e){

        return 'erro na conexao'.$e;
    }
