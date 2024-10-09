<?php
include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

try
{
   $maBD = new bdService();
   $sel = "select * from projets";
   $tabProj = $maBD->selection($sel);
   
   echo json_encode($tabProj);
}

catch(Exception $e)
{
	echo "Erreur 9: " . $e->getMessage();
}
