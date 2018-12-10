@extends('inc.header')
@extends('inc.connexion')

<!--Petit Problème au niveau du title il faut revoir pour que chaque page puisse avoir son propre titre -->

  <u><h2><strong>Technicien(ne) de maintenance informatique</strong></h2></u><br>

<p>Un virus, des fichiers volatilisés, un écran noir, une imprimante bloquée...<p> 
Tel est le lot quotidien du technicien de maintenance en informatique.<p> Véritable urgentiste, il veille au bon fonctionnement des matériels comme des logiciels.</p>

<img src="consignes/maintenanceinformatique.jpg" alt="Logo avischool" height="300" width="500"/>

<h3>Délais de la formation</h3>
<p>de 3 mois à 1 an</p>

<form action="commentaires.4.php" method="post">
<b><label>Postez un commentaire</label></b><br/>
<textarea name="commentaire" rows="4" cols="50"></textarea><br/>
<input id="Valider" type="submit" value="Envoyer">
</form>

<div class="commentaire">

<?php

$pdo = new PDO('mysql:host=localhost;dbname=avischool;charset=utf8','root',''); 


//déclaration des variables
$reponse = $pdo->query('SELECT commentaire FROM commentaires ORDER BY ID DESC LIMIT 0, 10');


//affichage des données
while ($donnees = $reponse->fetch())
{
	echo '<p>'. htmlspecialchars($donnees['commentaire']) .'</p><hr/>';

}  

$reponse->closeCursor();

?>

</div>

<div id="mySidebar" class="sidebar">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<a href="https://www.afpa.fr/formation-qualifiante/technicien-d-assistance-en-informatique">AFPA</a>
<a href="http://formation.cnam.fr/rechercher-par-metier/technicien-de-maintenance-en-informatique-508675.kjsp">Le CNAM</a>
<a href="https://apformation.com/parcours_metiers/technicien-de-maintenance-informatique.html">APFormation</a>
<a href="https://www.ican-design.fr/formation-continue-vae-formation-intensive-diplomante.html">ICAN</a>


</div>

<div id="main">
<button class="openbtn" onclick="openNav()">☰ Nos centres de formation</button>  
</div>
<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

@extends('inc.footer')