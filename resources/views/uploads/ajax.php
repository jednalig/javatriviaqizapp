<?php

$action = $_GET['action'];
include 'class.php';
$crud = new Action();

if($action == "complaint"){
	$save = $crud->complaint();
	if($save)
		echo $save;
}

?>
