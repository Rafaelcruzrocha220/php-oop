<?php 
require_once('header.php');
require_once('conecta.php');
require_once('banco-produto.php');
require_once('banco-categoria.php');

$produtos = listaProduto($conexao);

if(array_key_exists("removido", $_GET) && $_GET['removido'] == true){ ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>


<table border="2">
<?php foreach($produtos as $produto) { ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'],0,20)?></td>
        <td><?= $produto['categoria_nome']?></td>
        <td><?= $produto['usado'] ?></td>
        <td><a href="remove-produto.php?id=<?=$produto['id']?>">Remover</a></td>
    </tr>
<?php } ?>
</table>

<?php  require_once('footer.php');?>