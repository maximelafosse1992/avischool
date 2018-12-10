
<!DOCTYPE html>
<html lang="FR">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.nav .navbar-nav{
        font-family: "Catamaran", sans-serif ;
        color : #000000 ; 
        hover (for font) : #ed4d00 ; 
        background-color : #ffffff ;}

body{
        font-family: "Open Sans", sans-serif ; 
        color : #000000 ;  
        background-color : #ffffff ;  
        hover(for background): #fde8df ;
    }
    .sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color: #444;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    float: right;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
}

/* CSS à travailler pour le commentaire*/
textarea{
    border-style: groove;
    border-width: 5px;
}
/*Css a travailler pour les commentaires*/
.commentaire{
    border-style: double;
    border-width: 5px;
    width:60%;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
    
}
</style>
                           
</head>
<body>
<!-- Barre de naviguation -->
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <a href="accueil">
    <img src="consignes/avischool.jpg" alt="Logo avischool" height="50" width="50"/></a>
    <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="formation">Formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#logement">Logement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#emploi">Emploi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
    </nav>