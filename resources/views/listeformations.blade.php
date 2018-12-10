
    <style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>                       
<body>


<h3><strong>Liste des formations</strong></h3><br>

<p>Avischool est un site de recherche de formations qui as choisi<p>
de se diriger vers trois corps de formations.</p><br><br>

<button class="accordion">Informatique</button>
<div class="panel">
  <a href="developpeurweb.php">Développeur web</a><br><br>
  <a href="webdesigner.php">Formation webdesigner-webmaster</a><br><br>
  <a href="techniciendemaintenance.php">Technicien
  de maintenance</a><br><br>
  
</div>

<button class="accordion">Culinaire</button>
<div class="panel">
  <a href="cuisine.php">Cuisinier</a><br><br>
</div>

<button class="accordion">Medecine douce</button>
<div class="panel">
  <a href="magnetisme.php">Société Française de Magnétisme</a><br><br>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>