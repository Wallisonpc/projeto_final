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
$sql = "INSERT INTO Prestador(Inscricao, Nome, Telefone, Email, Cidade, Senha) VALUES (:Inscricao, :Nome, :Telefone, :Email, :Cidade, :Senha)";
        $dados= Conexao::prepare ($sql);
        $dados->bindValue('Inscricao', $obj->insc);
        $dados->bindValue('Nome', $obj->Nome);
        $dados->bindValue('Telefone', $obj->Telefone); 
        $dados->bindValue('Email', $obj->Email);
        $dados->bindValue('Cidade', $obj->Cidade);
        $dados->bindValue('Senha', $this->gerarSenha($obj->Senha));
        return $dados->execute();
   }
   
function update($obj, $insc =null) {
    $sql = "UPDATE Prestador SET Nome =:Nome WHERE insc=:insc";
    $dados = Conexao::prepare($sql);
    $dados->bindValue ('Nome', $obj->Nome);
    $dados->bindValue ('insc', $insc->insc);
    return $dados->execute();
       
}

function delete ($obj, $insc= null) {
    $sql = "DELETE FROM Prestador WHERE insc=:insc";
    $dados=  Conexao::prepare($sql);
    $dados-> bindValue ('insc', $insc);
    $dados->execute();
}

function find($insc=null){
    $sql="SELECT * FROM Prestador WHERE insc=:insc";
    $dados=  Conexao::prepare($sql);
    $dados-> bindValue(insc, $insc);
    $dados->execute();
}

function findALL(){
    $sql="SELECT * FROM Prestador";
    $dados=  Conexao::prepare($sql);
    $dados->execute();
    return $dados->fetchALL();
    
}

function gerarSenha($Senha){
    return password_hash($Senha, PASSWORD_DEFAULT);
}
function verificarSenha($hash, $Senha) {
    return var_dump(password_verify($Senha, $hash));
}




