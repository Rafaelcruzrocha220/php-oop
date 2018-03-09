<?php
require_once('header.php');
require_once('conecta.php');
require_once('banco-produto.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(removeProduto($conexao,$id)){
    header("Location: produto-lista.php?removido=true");
    die();
}


    
