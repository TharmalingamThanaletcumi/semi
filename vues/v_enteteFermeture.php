<?php   
$user=null;
if (!empty($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/jquery-ui.css" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/dataTable.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./styles/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="./styles/formlogin.css" />
    
     <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>     
     <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
     <script type="text/javascript" src="js/jquery.gritter.min.js"></script>
     <script type="text/javascript" src="js/jquery_002.js"></script>
     <title>E-Seminaire : gestion des inscriptions</title>
  </head>
  <body>
   <div class="box inscription">
<h3>Séminaire : « Les Journées du management 2013»</h3>
   <p>La prise en compte du temps dans les décisions des organisations (CNAM Paris)</p>
  <p><b>Les inscriptions sont désormais closes.</b></p> 
Il vous sera possible d'accéder aux ateliers pour lesquels il y a encore des places disponibles. 
<p>Merci d’adresser votre demande par courriel à <a href="mailto:journeesdumanagement2013@gmail.com?Subject=inscription" target="_top">journeesdumanagement2013@gmail.com
</a> (en précisant chacun des ateliers auquel vous souhaitez participer.</p> 

<p>Nous vous remercions de votre compréhension.</p>
<p>Téléchargez ici : <a href='programme2013.pdf'> Le programme du séminaire</a></p>
</div>
  
  </body>
</html>
