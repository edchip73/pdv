<?php
include('../seguranca.php');
include('../conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id=" . $id;
$stmt = $conexao->prepare($sql);
$stmt->execute();
header("location: index.php");
