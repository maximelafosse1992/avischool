@extends('inc.header')
@extends('inc.connexion')

<u><h2><strong>Société Française de Magnétisme</strong></h2></u><br>

<p>
Bienvenue à la Société Française de Magnétisme, l’école référence en France pour apprendre à magnétiser, sur Toulouse et à distance grâce au E-Learning (formation en ligne via Internet).</p>

<h3>Délais de la formation</h3>
  <p>2 mois</p>

<form action="commentaires.php" method="post">
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
  <a href="https://www.formationmagnetisme.eu/">Formation Magnétisme pour devenir Magnétiseur</a>
  <a href="https://www.ifta.fr/formation/magnetisme.html">Formations en Magnétisme Thérapeutique – Formations en Hypnose</a>
  <a href="https://www.medecinesdouces-fr.com/formation-magnetisme/">Formation Magnétisme pour devenir Magnétiseur - Ecole Française</a>
  <a href="https://www.i-f-m.fr/
">IFM - Formation Praticien en Magnétisme</a>

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