<?php

include __DIR__ . '/../Conexao.php';

class Prestador extends Conexao {

Private $insc;
Private $Nome;
Private $Telefone;
Private $Email;
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

function getEmail() {
return $this->Email;
}

function setEmail($Email) {
$this->Email = $Email;
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

function insert($obj){
$sql = "INSERT INTO prestador(Inscricao, Nome, Telefone, Email, Cidade, Senha) VALUES (:Inscricao, :Nome, :Telefone, :Email, :Cidade, :Senha);
        $consulta= Conexao:prepare ($sql);
        $consulta->bindValue('Inscricao', $obj->Inscricao);
        $consulta->bindValue('Nome', $obj->Nome);
        $consulta->bindValue('Telefone', $obj->Telefone); 
        $consulta->bindValue('Email', $obj->Email);
        $consulta->bindValue('Cidade', $obj->Cidade);
        $consulta->bindValue('Senha', $this->gerarHashSenha($obj->Senha));
        return $consulta->execute();
}