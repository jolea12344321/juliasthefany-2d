<?php

// Configurações do banco
$host    = "localhost";   // normalmente não precisa alterar
$usuario = "root";        // substituir se seu usuário não for root
$senha   = "";            // substituir se você tiver senha no MySQL
$banco   = "julia_sthefany2d";       // substituir pelo nome do seu banco criado no phpMyAdmin

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");

// ==========================================
// A PARTIR DAQUI, CONFIGURAÇÕES DO CLOUDINARY
// ==========================================

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "deh0x0mhs";  // exemplo: "meucloud123"
$api_key    = "945565348264774";     // exemplo: "123456789012345"
$api_secret = "Ol7pF_EcfrThOwSSzxJtumRH8lo";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>