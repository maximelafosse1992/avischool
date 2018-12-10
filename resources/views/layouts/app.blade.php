<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>{{$titre}}</title>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="/">Avischool</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="metiersinformatique">Metier de l'informatique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formationcuisine">Formation Cuisine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formationmedecinedouce">Formation Médecine Douce</a>
          </li>
    </div>
</nav>
<header>
  @yield('inc.nav')
</header>
<main>
    @yield('contenu')
</main>

<footer>
</footer>
</body>
</html>