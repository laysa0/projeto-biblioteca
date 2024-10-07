<?php
//Configuração do banco de dados
$db_host = "localhost"; // Hostname do servidor de banco de dados
$db_user = "root"; // Nome de usuário para conectar ao banco  de dados
$db_pass = ""; // Senha para conectar ao banco de dados (vazio significa sem senha)
$db_name = "biblioteca";// Nome do banco de dados a conectar

//conectar ao banco de dados
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

//verificar se a conexão foi bem-sucedida
if ($conn->connect_error){
//se houver um erro, exibir a mensagem de erro e encerrar a execução do script
// a seta -> é usada para acessar propriedades e métodos de objetos em PHP, tornando o código mais legível e fácil de manter
die("Conexão falhou: {$conn->connect_error}");
}
else {
    echo "PARABÉNS!! a conexão ao banco de dados ocorreu normalmente!";

}