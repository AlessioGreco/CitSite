<?php
$coords = [];
$coords["x"] = $_GET['x'];
$coords["y"] = $_GET['y'];

echo json_encode($coords);

?>