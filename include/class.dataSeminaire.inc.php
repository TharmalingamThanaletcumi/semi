<?php
/** 
 * Classe de manipulation des données des séminaires. 
 
 * Destinée aux extractions d'informations sur les séminaires et d'injections de données pour leur création
 * @package default
 * @author ED
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class DataSeminaire{   		
/**
 * Fonction statique qui r�cup�re les inscriptions des s�ances (ateliers, tables rondes ou conf�rences)  destin� � la g�n�ration d'un fichier CSV
 * @return retourne une chaine de caract�res destin�e � �tre affich�e dans un fichier CSV g�n�r� par la page appelante.
 */
public static function extractInscriptionsSeances($idSemi){
		$liste = "JOURNEE;CRENEAU;SEANCE;PARTICIPANT;ACADEMIE;PRISE EN CHARGE;TITRE;COURRIEL\n";
		$pdoSemi = PdoSeminaire::getInstance();
		$lesSeances = $pdoSemi->getLesSeances($idSemi);
		$day = "";
		
		//echo var_dump($lesSeances);
		foreach ($lesSeances as $seance=>$seances) :
			if (substr($seances['dateHeureDebut'],0,10) != $day){
				$j = PdoSeminaire::jourFr(date("N", strtotime($seances['dateHeureDebut'])));
				$day = $j . ' ' . date("d-m-Y", strtotime($seances['dateHeureDebut']));
				$liste .= $day ."\n";
				$creneau = "";
			}
			$day = substr($seances['dateHeureDebut'],0,10);
			if ($creneau != $seances['dateHeureDebut']){
					$liste .= ";".substr($seances['dateHeureDebut'],11,5)."-".substr($seances['dateHeureFin'],11,5)."\n";
			}
			$liste .= ";;".$seances['libelle']."\n";
			$lesInscrits = $pdoSemi->getLesInscrits($seances['id'], $idSemi);
			foreach ($lesInscrits as $inscrit) :
					$liste .= ";;;".$inscrit['nom']." " . $inscrit['prenom'] .";" .$inscrit['acad'].";".$inscrit['priseEnCharge'].";".$inscrit['titre'].";".$inscrit['mail']."\n";
			endforeach;
			$creneau = $seances['dateHeureDebut'];
		endforeach;	
		return $liste;  
	}
	/**
	 * Fonction statique qui r�cup�re les quantit�s d'inscription des s�ances (ateliers, tables rondes ou conférences) destin� � la g�n�ration d'un fichier CSV
	 * @return retourne une chaine de caract�res destin�e � �tre affich�e dans un fichier CSV g�n�r� par la page appelante.
	 */
	public static function extractEtatInscriptionsSeances($idSemi){
		$liste = "JOURNEE;CRENEAU;SEANCE;CAPACITE;INSCRITS;PLACES RESTANTES\n";
		$pdoSemi = PdoSeminaire::getInstance();
		$lesSeances = $pdoSemi->getLesSeances($idSemi);
		$day = "";
		foreach ($lesSeances as $seance=>$seances) :
			if (substr($seances['dateHeureDebut'],0,10) != $day){
				$j = PdoSeminaire::jourFr(date("N", strtotime($seances['dateHeureDebut'])));
				$day = $j . ' ' . date("d-m-Y", strtotime($seances['dateHeureDebut']));
				$liste .= $day ."\n";
				$creneau = "";
			}
			$day = substr($seances['dateHeureDebut'],0,10);
			if ($creneau != $seances['dateHeureDebut']){
					$liste .= ";".substr($seances['dateHeureDebut'],11,5)."-".substr($seances['dateHeureFin'],11,5)."\n";
			}
			$liste .= ";;".$seances['libelle']."\n";
			$nbInscrits = $pdoSemi->getNbInscritsSeance($seances['id']);;
			$restant = $seances['nbMax'] - $nbInscrits;
			$max = $seances['nbMax'];
			if ($max == -1) { $max="Illimit�"; $restant = "Illimit�";}
			
			$liste .= ";;;".$max.";".$nbInscrits.";".$restant."\n";
			$creneau = $seances['dateHeureDebut'];
		endforeach;
		return $liste;
	}
	
	/**
	 * Fonction retournant une g�n�ration d'un fichier CSV r�capitulant les inscrits tri�s par acad�mie (sera utilis� pour produire un CSV servant � l'impression des fiches parcours individuels).
	 * @param $idSemi identifiant du s�minaire dont l'extraction est souhait�e
	 */
	public static function extractTousParticipantParAcad($idSemi){
		$liste = ";;;;;";
		
		// g�n�ration de l'ent�te pour les ateliers
		// r�cup�re toutes les seances
		$pdoSemi = PdoSeminaire::getInstance();
		$lesSeances = $pdoSemi->getLesSeances($idSemi);
		$jourC = "";	// jour Courant dans le parcours des s�ances
		$heureC = "";	// idem heure courante
		$second = ";;;;;";
		$troisieme = "";
		foreach ($lesSeances as $seance=>$seances) :
			// r�cup du jour de la s�ances actuellement analys�e
			$jourA = substr($seances['dateHeureDebut'],0,10);
			$heureA = substr($seances['dateHeureDebut'],11,5);
			if ($jourA != $jourC){
				// le jour est �crit dans une colonne
				$liste .= $jourA.";";
				$jourC = $jourA;
			}else{
				$liste .=";";
			}
			// pr�paration de la seconde ligne
			if ($heureA != $heureC){
				// l'horaire est �crit dans une colonne
				$second .= $heureA.";";
				$heureC = $heureA;
			}else{
				$second .=";";
			}
			// troisi�me ligne
			$troisieme .= $seances['numRelatif'].";";
		endforeach;
		$liste .= "\n".$second."\n"."ACADEMIE;PARTICIPANT;TITRE;COURRIEL;".$troisieme;
		
		// Chargement des participants
		$lesInscrits = $pdoSemi->getLesInscritsSeminaire($idSemi);
		
		foreach ($lesInscrits as $inscrit) :
			$liste .= "\n".$inscrit['acad'].";" . $inscrit['nom'] ." " .$inscrit['prenom'].";".$inscrit['titre'].";".$inscrit['mail'];
			// pour chaque séance de la liste, on va voir si on a une inscription de cette personne et on affiche 1 si c'est le cas dans la cellule
			foreach ($lesSeances as $seance=>$seances) :
				if ($pdoSemi->estInscritA($inscrit['id'], $seances['id'])){
					$liste .= ";1";
				}else{
					$liste .= ";";
				}
			endforeach;
		endforeach;
		
		return $liste;
	}
	
	public static function extractTousParticipantAtelier($idSem){
		// etape 0 : récupérer les plages d'atelier : tabAtelier
		$pdoSemi = PdoSeminaire::getInstance();
		$lesPlagesAtelier =  $pdoSemi->getLesPlagesAtelier($idSem);

		// etape 1 : creation de la première ligne
		$liste = "ACADEMIE;NOM;PRENOM";
		$i = 1;
		foreach ($lesPlagesAtelier as $plage) {
			$j = PdoSeminaire::jourFr(date("N", strtotime($plage['dateHeureDebut'])));
			$day = $j . ' ' . date("d-m-Y::H:i", strtotime($plage['dateHeureDebut']));
			$liste .= '; ('. $i++ .') ' . $day;
		}
		
		
		// etape 2 : obtenir les participants		
		$lesParticipants = $pdoSemi->getLesInscritsSeminaire($idSem);
		//etape 3 : rechercher les libellés ateliers inscrits 
		foreach ($lesParticipants as $participant) :
		  $libAteliers = array();
		  foreach ($lesPlagesAtelier as $plage) :
		     $res = $pdoSemi->getLibAtelier($plage['dateHeureDebut'], $participant['id'], $idSem);
// 		     print_r(">". $plage['dateHeureDebut']. '<>'. $participant['id'].'<>'. $idSem.'<>'); 
// 		     var_dump($res);
// 		     die();		     		    
// 		     if (strpos($res->libelle, 'marketing')) :
// 		     	  var_dump($res);
//   		     	die();
// 		     	endif;
		     $libAteliers[$plage['dateHeureDebut']] = ($res) ? $res->libelle : ''; 				
		  endforeach;
		  //etape 4 : construction de la ligne
		  $liste .= "\n" . $participant['acad'] . ';' . $participant['nom'] .';' .$participant['prenom'];
		  foreach ($libAteliers as $key=>$libelle) 
		  	$liste .= ';' . $libelle;		    
		endforeach;
		
		return $liste;		
	}
	
}