<?php
session_start();

require 'vues/checkUserIntoSession.php';
// user existe dans la session

// il faut au moins un role défini...
// TODO a voir le ou lesquels !
if (empty($user->role)) :
  header('Location: index.php?action=login');
  exit(1);
endif;

include('include/class.pdoSeminaire.inc.php');
include('include/class.dataSeminaire.inc.php');

$pdo = PdoSeminaire::getInstance();
if(!isset($_POST['action'])){
	$action = 'csvFinale';
}
else {
	$action = $_POST['action'];
}

switch($action){
	case 'cvsPrepaBadgesAtelier':
		$lesInscriptions = DataSeminaire::extractTousParticipantAtelier(strip_tags($_POST['idSeminaire']));
		require('vues/v_exportPourBadgeAtelier.php');
		break;
	case 'csvFinale':
		$lesInscriptions = DataSeminaire::extractInscriptionsSeances(strip_tags($_POST['idSeminaire']));
		require('vues/v_exportFinale.php');
		break;
	case 'csvEtat':
		$lesInscriptions = DataSeminaire::extractEtatInscriptionsSeances(strip_tags($_POST['idSeminaire']));
		require('vues/v_exportEtat.php');
		break;
	case 'tousAcad':
		$lesInscriptions = DataSeminaire::extractTousParticipantParAcad(strip_tags($_POST['idSeminaire']));
		require('vues/v_exportTousAcad.php');
		break;			
	default :
		header('Location: index.php?action=login');
		exit(1);
}

