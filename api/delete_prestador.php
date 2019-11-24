<?php
include __DIR__.'/../control/Prestador.php';

$data = file_get_contents('php://input');
$obj = json_decode($data);

$insc = $obj->insc;

if (!empty($data)) {
    $PrestadorControl = new PrestadorControl();
    $PrestadorControl->delete($obj, $insc);
    header('Location:index.php');
}
?>

