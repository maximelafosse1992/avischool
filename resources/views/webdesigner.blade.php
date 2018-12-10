
@extends('inc.header')
@extends('inc.connexion')

  <u><h2><strong>Web Designer</strong></h2></u><br>

        <p>Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s'occupe de tout l'aspect graphique d'un site Internet (illustrations, animations, typographie...). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l'utilisateur. Il crée aussi les pictogrammes qui facilitent la lecture et la navigation dans le site. Dans certains cas, il sera amené à établir la charte graphique et à créer l'identité visuelle du site. C'est un exercice délicat car il faut respecter à la fois la demande du client, les impératifs de marketing et de communication, et ceux du public visé... De plus, Internet comporte des contraintes spécifiques à prendre en compte : par exemple, les temps de téléchargement trop lents qui peuvent décourager les internautes.

        Le webdesigner doit maîtriser les logiciels de graphisme (Photoshop, Illustrator...) et connaître les règles de l'ergonomie pour capter l'attention des visiteurs. Il peut travailler pour un studio de création de sites Internet, le service communication d'une entreprise, ou à son compte.</p>

  <img src="consignes/designer.jpg" alt="Logo avischool" height="300" width="500"/>

  <h3>Délais de la formation</h3>
  <p>de 3 mois à 1 an</p>

<form action="commentaires.3.php" method="post">
<b><label>Postez un commentaire</label></b><br/>
<textarea name="commentaire" rows="4" cols="50"></textarea><br/>
<input id="Valider" type="submit" value="Envoyer">
</form>

<div class="commentaire">

<?php

$pdo = new PDO('mysql:host=localhost;dbname=avischool;charset=utf8','root',''); 
//print_r($pdo);


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
  <a href="https://www.image-formation.com/formation_webdesigner_webmaster.php">IMAGE label école du numérique Occitanie</a>
  <a href="https://www.digital-campus.fr/metier-internet-numerique/webdesigner?gge_source=google&gge_medium=cpc&gge_term=%2Bformation%20%2Bweb%20%2Bdesigner&gclid=Cj0KCQiA3IPgBRCAARIsABb-iGL-b8yaJBCihkGOLq5sEg2gy2ezM6UsEBwz0h29R6ejNcj04zy39ssaAlq4EALw_wcB">DIGITAL CAMPUS</a>
  <a href="https://www.afpa.fr/formation-qualifiante/web-designer">AFPA</a>
  <a href="https://www.ican-design.fr/formation-continue-vae-formation-intensive-diplomante.html">ICAN</a>
  <a href="http://www.mjm-design.com/formation/webdesign">MJM GRAPHIC DESIGN</a>

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
