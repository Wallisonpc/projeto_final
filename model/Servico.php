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
    $this->contato_prestador = $Tcontato_prestador;
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
