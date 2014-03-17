<script type="text/javascript"> 
function verifier() 
{ 
    var numeroErreur=0; 
    var ok=true; 
    var tabErreur=new Array(); 
    var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var i; 
    
    if(document.getElementById("email").value.length==0) 
    { 
        ok=false; 
        tabErreur[numeroErreur]="Veuillez saisir le champ mail svp"; 
        numeroErreur++; 
    }
    
    else if(regex.test(document.getElementById("email").value) == false)
       {
        ok=false;
        tabErreur[numeroErreur]="L'adresse mail est invalide"; 
        numeroErreur++;  
       }
    if(document.getElementById("cle").value.length==0) 
    { 
        ok=false;
        tabErreur[numeroErreur]="Veuillez saisir la clé du séminaire svp"; 
        numeroErreur++; 
    } 
    
    if(!ok) 
    { 
        var libelleErreur=""; 
        for(i=0; i<numeroErreur; i++) 
            libelleErreur+="\n*"+tabErreur[i]; 
        window.alert(libelleErreur); 
 } 
return ok;
}
</script>
<?php 

$default_login_mail = (empty($_SESSION['doLogin_email']) ? '' : "value='".$_SESSION['doLogin_email']."'");
$default_login_cle = (empty($_SESSION['doLogin_cle']) ? '' : "value='".$_SESSION['doLogin_cle']."'");
$emailbis = (isset($_SESSION['doLogin_emailbis']) ? "value='".$_SESSION['doLogin_emailbis']."'" : FALSE);
$titre = ($emailbis !== FALSE) ? "Création d'un compte" : "Connexion";

?> 
<div class="box inscription">
<form class="box" method='post' action='index.php' onSubmit="return verifier(this)">
	<fieldset class="boxBody">
	  <label>Votre email *</label>
	  <input type="text" placeholder="" name="email" id="email" <?php echo $default_login_mail?> >
	  <?php if ($emailbis !== FALSE) :?>
	  <label>Confirmation email *</label>
	  <input type="text" placeholder="" name="emailbis" id="emailbis" onPaste="return false;" <?php echo $emailbis?> >
	  <?php endif;?>
	  <label>Clé du séminaire *</label>
	  <input type="password"  name="cle" id="cle" <?php echo $default_login_cle?> >
	  <input type="hidden" name='action' value='doLogin'>
	</fieldset>
	<footer>
	  <!-- label><input type="checkbox" tabindex="3">Keep me logged in</label -->
	  <!-- label> <?php echo $titre ?></label -->
	  <input type="submit" class="_btnLogin" value="<?php echo $titre ?>" tabindex="4">
	</footer>
</form>
</div>
<?php if ($sessionCloturee) :?>
<div class="box inscription">
<h3>Séminaire : « Les Journées du management 2013»</h3>
   <p>La prise en compte du temps dans les décisions des organisations (CNAM Paris)</p>
  <p><b>Les inscriptions sont désormais closes.</b></p> 
Il vous sera possible d'accéder aux ateliers pour lesquels il y a encore des places disponibles. 
<p>Merci d’adresser votre demande par courriel à <a href="mailto:journeesdumanagement2013@gmail.com?Subject=inscription" target="_top">journeesdumanagement2013@gmail.com
</a> (en précisant chacun des ateliers auquel vous souhaitez participer).</p> 

<p>Nous vous remercions de votre compréhension.</p>
<p>Téléchargez ici : <a href='programme2013.pdf'> Le programme du séminaire</a></p>
</div>
<?php endif;?>