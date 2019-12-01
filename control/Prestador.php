<?php

include __DIR__ . '/../model/Prestador.php';

class PrestadorControl {

    function insert($obj) {
        $prestador = new Prestador();
        return $prestador->insert($obj);
    }

    function delete($obj, $insc) {
        $prestador = new Prestador();
        return $prestador->delete($obj, $insc);
    }

    function update($obj, $insc) {
        $prestador = new Prestador();
        return $prestador->update($obj, $insc);
    }

    function find($insc = null) {
        $prestador = new Prestador();
        return $prestador->find($insc);
    }

    function findAll() {
        $prestador = new Prestador();
        return $prestador->delete();
    }

}
