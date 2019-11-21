<?php
include __DIR__ . '/../control/ServicoControl.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

$crm = $obj->cod_servico;

if (!$cod_servico) {
    http_response_code(400);
    echo json_encode(array("mensagem" => "Necessita de um codigo para atualizar"));
} else {
    if (!empty($data)) {
        $ServicoControl = new ServicoControl();
        $ServicoControl->update($obj, $cod_servico);
    }
}
?>

