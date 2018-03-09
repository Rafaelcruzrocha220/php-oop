<?php require_once('header.php');
require_once('conecta.php');
require_once('banco-categoria.php');

$categorias = listaCategorias($conexao);
?>

    <form action="adiciona-produto.php" method="post">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" id="produto">
        
        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco">

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao">

        <label for="categorias">Categorias:</label>
        <select name="categoria_id">
        <?php foreach ($categorias as $categoria) {?>
        <option name="categoria_id" value="<?=$categoria['id']?>" id=""><?=$categoria['nome']?></option>    
        <?php }?>
        </select>

        <label for="usado">Produto usado:</label>
        <input type="checkbox" name="usado" id="usado" value="true">usado</input>
        
        
        <button type="submit">Enviar</button>
    </form>
<?php require_once('footer.php')?>