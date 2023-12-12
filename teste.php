<?php 

include "conexao.php";

$senha = md5('173073');
$sql = "insert into usuarios ('Eduardo','edchip73@gmail.com','$senha')";
echo $sql;
$stmt = $conexao->prepare($sql);
$stmt->execute();

echo $sql;