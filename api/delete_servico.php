<?php

include __DIR__.'/../control/ServicoControl.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

$insc = $obj->cod_servico;

if (!empty($data)) {
    $ServicoControl = new ServicoControl();
    $ServicoControl->delete($obj, $cod_servico);
    header('Location:index.php');
}
?>
