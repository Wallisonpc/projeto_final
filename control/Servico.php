<?php

include __DIR__. '/../Servico.php';


Class ServicoControl{
    
}
   function insert($obj) {
        $servico = new Servico();
        return $servico->insert($obj);
    }

    function delete($obj, $cod_servico) {
        $servico = new Servico();
        return $servico->delete($obj, $cod_servico);
    }

    function update($obj, $cod_servico) {
        $servico = new Servico();
        return $Servico->update($obj, $cod_servico);
    }

    function find($cod_servico = null) {
        $servico = new Servico();
        return $prestador->find($cod_servico);
    }

    function findAll() {
        $servico = new Servico();
        return $servico->delete();
    }




