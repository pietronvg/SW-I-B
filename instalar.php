<?php
 $conexao = new mysqli("localhost","root","","")

if($conexao->connect_error)
{
echo "Conexão falhou: ".$conexao->connect_error;
}
$create_database = "CREATE DATABASE IF NOT EXISTS AulaSW";
$conexao->query($create_database);

$tabela_clientes = "CREATE TABLE CLIENTES(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(180) NOT NULL,
    TELEFONE VARCHAR(20)
    )";
$tabela_atendente = "CREATE TABLE ATENDENTES(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(180) NOT NULL,
    TELEFONE VARCHAR(20) NOT NULL
    )";
$tabela_serviços = "create table servicos(
    id int primary key auto_increment,
    servico varchar(180)
    )";
$tabela_horarios = "create table horarios(
id int primary key auto_increment,
horario_inicio varchar(5) not null,
horario_termino varchar(5) not null,
dia_semana varchar(10) not null
    )";
$tabela_atendente_horario = "create table atendente_horario(
    
    )"
?>