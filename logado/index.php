<?php 
    session_start();

    require_once("servidor.php");

    if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
    if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])) {
        $id=$_SESSION['id'];
        $nome=$_SESSION['nome'];
    } else {
        $_SESSION['mensagem'] = "Você não está logado.";
        header("location:../");
        exit;
    }
?>

Bem-vindo(a), <?=$nome?>, seu id é <?=$id?><br>
<a href="sair.php"><button>Sair</button></a>
<form action="listar.php" method="get" accept-charset="utf-8">
    Nome Produto<input type="text" name="nomedoproduto"><br>
    Preço Produto<input type="text" name="preco"><br>
    Código Produto<input type="number" name="codigo"><br>
    <input type="submit" name="Enviar"> 
</form>

<a href="lista.php">Lista de produtos</a>