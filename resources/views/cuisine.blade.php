@extends('inc.header')
@extends('inc.connexion')

<u><h2><strong>Formation Cuisine</strong></h2></u><br>

<p>
Derrière ses fourneaux, il prépare de bons petits plats. Plats du terroir ou plats exotiques, le cuisinier associe les saveurs, rectifie les assaisonnements, mijote les sauces pour étonner et satisfaire ses clients les plus gourmets.</p>

<h3>Délais de la formation</h3>
  <p>2 mois</p>

<form action="commentaires.1.php" method="post">
<b><label>Postez un commentaire</label></b><br/>
<textarea name="commentaire" rows="4" cols="50"></textarea><br/>
<input id="Valider" type="submit" value="Envoyer">
</form>

<div class="commentaire">

<?php

$pdo = new PDO('mysql:host=localhost;dbname=avischool;charset=utf8','root',''); 

$reponse = $pdo->query('SELECT commentaire FROM commentaires');

while ($donnees = $reponse->fetch())
{
	echo '<p>'. htmlspecialchars($donnees['commentaire']) .'</p><hr/>';

}
    
?>
  
</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="https://www.afpa.fr/formation-qualifiante/cuisinier">Formation Cuisinier – AFPA</a>
  <a href="https://www.afpa.fr/formation-qualifiante/responsable-de-cuisine-en-restauration-collective">Formations RESPONSABLE DE CUISINE EN RESTAURATION COLLECTIVE – AFPA</a>
  <a href="https://www.afpa.fr/certificat-de-qualification-professionnelle/commis-de-cuisine-en-alternance-cqp">CERTIFICAT DE QUALIFATION PROFESSIONNELLE COMMIS DE CUISINE – AFPA</a>

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Nos centres de formation</button>  
</div>
 

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