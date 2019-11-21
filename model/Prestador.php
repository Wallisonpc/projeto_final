<?php

include __DIR__ . '/../Conexao.php';

class Prestador extends Conexao {

    Private $insc;
    Private $Nome;
    Private $Telefone;
    Private $Cidade;
    Private $Senha;

}

function getinsc() {
    return $this->insc;
}

function setinsc($insc) {
    $this->insc = $insc;
}

function getNome() {
    return $this->Nome;
}

function setNome($Nome) {
    $this->Nome = $Nome;
}

function getTelefone() {
    return $this->Telefone;
}

function setTelefone($Telefone) {
    $this->Telefone = $Telefone;
}

function getCidade() {
    return $this->Cidade;
}

function setCidade($Cidade) {
    $this->Cidade = $Cidade;
}

function getSenha() {
    return $this->Senha;
}

function setSenha($Senha) {
    $this->Senha = $Senha;
}




