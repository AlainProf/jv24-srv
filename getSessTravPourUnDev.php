<?php
include('bdService.php');
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');


$idDev = $_POST['idDev'];

try
{
   $maBD = new bdService();
   $sel = "select ST.id, idDev, idTache, debut, fin, numero AS numTache from sessionsTravail ST, taches TAC where idDev = $idDev and ST.idTache = TAC.id";
   
   //die($sel);
   
   $tabSessTrav = $maBD->selection($sel);
   
   echo json_encode($tabSessTrav);
}

catch(Exception $e)
{
	echo "Erreur 18: " . $e->getMessage();
}
