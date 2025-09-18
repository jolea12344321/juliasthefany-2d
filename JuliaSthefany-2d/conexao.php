<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco (geralmente localhost)
$usuario = "root";      // usuário do banco
$senha   = "";          // senha do banco
$banco   = "julia-sthefany2d";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

$cloud_name = "deh0x0mhs";  
$api_key    = "945565348264774";     
$api_secret = "Ol7pF_EcfrThOwSSzxJtumRH8lo";   

?>
