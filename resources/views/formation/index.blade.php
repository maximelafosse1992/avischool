<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FORMATION</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
            <ul>
                <li><a href="/formation/create">Créer une Formation</a></li>
            </ul>
        </nav>
    </div>
    <h1>Liste des Formations</h1>
    
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>id</td>
                <td>intitule</td>
                <td>prix</td>
                <td>duree</td>
                <td>note</td>
                <td>description</td>
            </tr>
        </thead>
        <tbody>
            @foreach($formation as $key=>$value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->intitule }}</td>
                <td>{{ $value->prix }}</td>
                <td>{{ $value->duree }}</td>
                <td>{{ $value->note }}</td>
                <td> {{ $value->description }}</td>
                <td>
                <!---Bouton de suppression-->
                {{Form::open(array('url'=> 'formation/'.$value->id, 'class'=>'pull-right'))}}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Supprimer',array('class'=>'btn btn-warning'))}}
                {{Form::close()}}
                <!---Bouton d'affichage détaillé--->
                <a class="btn btn-small btn-success" href="">Supprimer</a>
                <a class="btn btn-small btn-success" href="{{ 'formation/'.$value->id}}">Détail</a>
                <a class="btn btn-small btn-success" href="{{ 'formation/'.$value->id . '/edit'}}">Editer</a>
                </td>
            </tr>
            @endforeach
    </table>
</body>
</html>