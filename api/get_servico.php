<?php

include __DIR__ . '/../control/Servico.php';

 $ServicoControl = new ServicoControl();

header('Content-Type: application/json');
echo json_encode($ServicoControl->findAll());
?>

