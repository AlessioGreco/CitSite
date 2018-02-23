<?php
$coords = [
	'x' => 0,
	'y' => 0
];
$coords = json_decode($_GET['coords'], true);
echo json_encode($coords);
?>