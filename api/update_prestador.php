<?php

include __DIR__ . '/../control/PrestadorControl.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

$crm = $obj->insc;

if (!$insc) {
    http_response_code(400);
    echo json_encode(array("mensagem" => "Necessita de um numero de  Inscrição para atualizar"));
} else {
    if (!empty($data)) {
        $PrestadorControl = new PrestadorControl();
        $PrestadorControl->update($obj, $insc);
    }
}
?>