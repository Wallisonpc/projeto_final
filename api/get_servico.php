<?php

include __DIR__ . '/../control/ServicoControl.php';

 $ServicoControl = new ServicoControl();

header('Content-Type: application/json');
echo json_encode($ServicoControl->findAll());
?>

