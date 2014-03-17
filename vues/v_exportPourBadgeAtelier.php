<?php
//session_start();
require_once 'checkUserIntoSession.php';

if (empty($user->role)) :
  header('Location: index.php?action=login');
  exit(1);
endif;
//envoi des headers csv

header('Content-type: text/csv;  charset=iso-8859-1');
//header('Content-Type: application/csv; charset=utf-8');
//nommage du fichier avec la date du jour
header('Content-disposition: filename=seminaireExportBadgeAtelier_'.date('Ymd').'.csv');
echo UTF8_decode($lesInscriptions);
