
@extends('inc.header')
@extends('inc.connexion')

<title>Développeur Web</title>  

    <u><h2><strong>Développeur web</strong></h2></u><br>
    <p>Chargé de la réalisation d'un site internet et des fonctionnalités qui vont avec, le développeur web est un programmateur multi-tâches et multi-languages, très flexible (agile), afin de s'adapter aux nombreux besoins d'un site internet. Véritable enjeu de ces dernières années, les développeurs sont très recherchés sur le marché de l'emploi. C'est sur les épaules du développeur web que repose la responsabilité du bon fonctionnement d'un site internet (nouveau service, maintenance du site, rapidité...).</p>
    <img src="consignes/developpeur.jpg" alt="Logo avischool" height="300" width="500"/>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Nos centres de formation</button>  
    </div>

    <h3>Délais de la formation</h3>
    <p>de 3 mois à 6 mois</p>

<form action="commentaires.2.php" method="post">
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
    <a href="http://www.wf3.fr/lecole/les-centres-de-formation-webforce3/nimes">WebForce3</a>
    <a href="http://www.csiformation.fr/">CSI Formation</a>
    <a href="#">A modifié</a>
    <a href="http://www.greta-gard.com/">GRETA du Gard</a>
    <a href="#">A modifié</a>
    <a href="#">A modifié</a>
    <a href="/www.ordisys.fr">Ordisys Informatique-Nimes</a>
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
