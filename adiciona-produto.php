<?php require_once('header.php');
require_once('conecta.php');
require_once('banco-produto.php');

$_POST['produto'] ? $produto = $_POST['produto'] : '';
$_POST['preco'] ? $preco = $_POST['preco'] : '';
$_POST['descricao'] ? $descricao = $_POST['descricao'] : '';
$_POST['categoria_id'] ? $categoria_id = $_POST['categoria_id'] : '';

if(array_key_exists('usado',$_POST)){
    $usado = 'true';
}else $usado = 'false';

if(conectaDB($conexao,$produto,$preco,$descricao,$categoria_id,$usado)) {
    ?>
    <p class="alert-success">Produto <?= $produto; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php
    } else {
    ?>
    <p class="alert-danger">O produto <? = $produto; ?> não foi adicionado, devido ao erro <?= mysqli_error($conexao)?></p>
    <?php
}

require_once('footer.php')?>