<?php

include __DIR__ . '/../Conexao.php';

class Prestador extends Conexao {

    Private $cod_servico;
    Private $nome_prestador;
    Private $contato_prestador;
    Private $descricao;
    Private $data_postagem;

}

function getcod_servico() {
    return $this->cod_servico;
}

function setcod_servico($cod_servico) {
    $this->cod_servico = $cod_servico;
}

function getnome_prestador() {
    return $this->nome_prestador;
}

function setnome_prestador($nome_prestador) {
    $this->nome_prestador = $nome_prestador;
}

function getcontato_prestador() {
    return $this->contato_prestador;
}

function setTcontato_prestador($contato_prestador) {
    $this->contato_prestador = $contato_prestador;
}

function getdescricao() {
    return $this->descricao;
}

function setdescricao($descricao) {
    $this->descricao = $descricao;
}

function getdata_postagem() {
    return $this->data_postagem;
}

function setdata_postagem($data_postagem) {
    $this->data_postagem = $data_postagem;
}

function insert($obj) {
    $sql = "INSERT INTO Servico (CodigoServico, Nome, Contato, Descricao, Data) VALUES (:cod_servico, :nome_prestador, :contato_prestador, :descricao, :data_postagem)";
    $dados = Conexao::prepare($sql);
    $dados->bindValue('CodigoServico', $obj->cod_servico);
    $dados->bindValue('Nome', $obj->nome_prestador);
    $dados->bindValue('Contato', $obj->contato_prestador);
    $dados->bindValue('Descricao', $obj->descricao);
    $dados->bindValue('Data', $obj->data_postagem);
    return $dados->execute();
}

function update($obj, $cod_servico = null) {
    $sql = "UPDATE Prestador SET Nome =: nome_prestador WHERE Codigo=:cod_servico";
    $dados = Conexao::prepare($sql);
    $dados->bindValue('Nome', $obj->nome_prestador);
    $dados->bindValue('Codigo', $cod_servico->cod_servico);
    return $dados->execute();
}

function delete($cod_servico = null) {
    $sql = "DELETE FROM Prestador WHERE Codigo=:cod_servico";
    $dados = Conexao::prepare($sql);
    $dados->bindValue('Codigo', $cod_servico);
    $dados->execute();
}

function find($cod_servico = null) {
    $sql = "SELECT * FROM Prestador WHERE Codigo=:cod_servico";
    $dados = Conexao::prepare($sql);
    $dados->bindValue(Codigo, $cod_servico);
    $dados->execute();
}

function findALL() {
    $sql = "SELECT * FROM Prestador";
    $dados = Conexao::prepare($sql);
    $dados->execute();
    return $dados->fetchALL();
}
