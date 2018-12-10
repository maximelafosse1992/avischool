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
                <li><a href="/formation/create">Créer une formations</a></li>
            </ul>
        </nav>

<h1>Edit {{ $formation->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ var_dump($errors->all()) }}

{{ Form::model($formation, array('route' => array('formation.update', $formation->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('intitule', 'Intitule') }}
        {{ Form::text('intitule', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('prix', 'Prix') }}
        {{ Form::text('prix', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('duree', 'Duree') }}
        {{ Form::text('duree', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('idDomaine', 'idDomaine') }}
        {{ Form::text('idDomaine', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('idFiliere', 'idFiliere') }}
        {{ Form::text('idFiliere', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('idOrganisme', 'idOrganisme') }}
        {{ Form::text('idOrganisme', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('idNiveauxEntree', 'idNiveauxEntree') }}
        {{ Form::text('idNiveauxEntree', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('idNiveauxSortie', 'idNiveauxSortie') }}
        {{ Form::text('idNiveauxSortie', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edite la formation!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>