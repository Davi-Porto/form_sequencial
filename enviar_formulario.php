<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "pizzaria_db";

$conn = new mysqli($server, $user, $pass, $database);

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$tipo = $_POST["tipo"];
$tamanho = $_POST["tamanho"];
$observacoes = $_POST["observacoes"];

$query = "INSERT INTO pedidos(nome, telefone, endereco, tipo, tamanho, observacoes) VALUES('$nome', '$telefone', '$endereco', '$tipo', '$tamanho', '$observacoes')";

if($conn->query($query) == true){
    echo "Pedido realizado com sucesso.";
}else{
    echo "Erro no pedido.";
}