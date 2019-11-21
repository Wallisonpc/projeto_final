<?php

include __DIR__ . '/../control/PrestadorControl.php';

$PrestadorControl = new PrestadorControl();

header('Content-Type: application/json');
echo json_encode($PrestadorControl->findAll());
?>



