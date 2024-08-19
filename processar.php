<?php
$servename="localhost";
$username= "root";
$password="";
$dbname="clientes";
$conn=new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){die("conexão falhou:". $conn->connect_error);}
$nome= $_POST['nome'];
$email= $_POST['email'];
$sql = "INSERT INTO clientes (nome, email)
        VALUES(?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
if ($stmt === false){
    die("Erro no preparação da consulta:". $conn->error);
}
$stmt->bind_param("ssssss", $nome, $email);
if ($stmt->execute()){
    echo "pedido realizado com suo!";

$stmt->close();
$conn->close();
?>P