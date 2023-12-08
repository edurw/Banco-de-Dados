<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "moneyplus";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Não foi possivel conectar');