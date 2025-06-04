<?php
include "conexao.php";

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
}

if(isset($_GET['acao'])){
    if($_GET['acao' == "cadastrar"]{
        echo "Cadastrar";
    })

}


?>