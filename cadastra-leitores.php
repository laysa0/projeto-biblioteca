<?php
include "config.php";
if (!$conn){
    die("Falha na conexão {mysqli_onnecct_error()");
}

//recebe dados do formulário
$nome = '';
$DtNasc = '';
$celular = '';
$email=  '';
$RA = '';
$endereco = '';
$NumEnd = '';
$bairro = '';
$cidadeUF = '';

//cria variável para inserir o registro
$sql = "";
