<?php 

function listaProduto($conexao){
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");
    $produtos = array();
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    };
    return $produtos;
};

function conectaDB($conexao,$produto,$preco,$descricao,$categoria_id,$usado){  
    $query = "insert into produtos (nome,preco,descricao,categoria_id,usado) values ('$produto',$preco,'$descricao','$categoria_id',$usado)";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;  
}

function removeProduto($conexao,$id){
    $query = "delete from produtos where id={$id}";
    return mysqli_query($conexao,$query);
}