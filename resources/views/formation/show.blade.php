<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FORMATION</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Formation</a>
            </div>
            <ul>
                <li><a href="/formation">Liste des formations</a></li>
            </ul>
        </nav>

        <h1>Détail de {{$formation->formation}}</h1>
        <div class="jumbotron text-center">
        <h2>{{$formation->formation}}</h2>
        <p>
        Intitule : {{$formation->intitule}}
        Description :{{$formation->description}}
        Duree : {{$formation->duree}}
        Prix : {{$formation->prix}}
        Note: {{$formation->note}}
        idDomaine: {{$formation->idDomaine}}
        idFiliere:{{$formation->idFiliere}}
        idOrganisme:{{$formation->idOrganisme}}
        idNiveauxEntree:{{$formation->idNiveauxEntree}}
        idNiveauxSortie:{{$formation->idNiveauxSorite}}
        </p>
