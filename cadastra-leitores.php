<?php
include "config.php";
if (!$conn){
    die("Falha na conexão {mysqli_onnecct_error()");
}

//recebe dados do formulário
$nome = 'Ryan felipe';
$dtnasc = '2002-06-27';
$celular = '(81) 98765-0000';
$email=  'ryanfelipe@gmail.com';
$ra = '12155';
$endereco = 'rua carpina';
$numend = '55';
$bairro = 'janga';
$cidadeuf = 'paulista-PE';

//cria variável para inserir o registro
$sql = "INSERT INTO leitores
(Nome, DtNasc, Celular, Email, RA, Endereco, NumEnd, Bairro, CidadeUF) values
('$nome', '$dtnasc', '$celular', '$email', '$ra', '$endereco', $numend', '$bairro', '$cidadeuf')";

//executa a consulta SQL. Se falha, exibe o ero do banco de dados 
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo"<center>";
    echo "cadastro realizado com sucesso!!<br>";
    echo "<a href='index.php'><button title= 'Homepage'>voltar</button></a>";
    echo "</center>";
} else{
    echo "<center>";
    echo "Erro ao cadastrar!!<br>";
    echo "<a href='index.php'><button title='Home page'>voltar</button></a>";
    echo "</center>";
}
?>
 