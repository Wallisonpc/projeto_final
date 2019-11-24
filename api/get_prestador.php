<?php

include __DIR__ . '/../control/Prestador.php';

$PrestadorControl = new PrestadorControl();

header('Content-Type: application/json');
echo json_encode($PrestadorControl->findAll());
?>



