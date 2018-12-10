<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FORMATION</title>
    <link rel="stylesheet" href="../css/app.css">
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
        </nav>
    </div>
    <h1>Ajouter une formation</h1>

    <!--Début du formulaire--->
    {{ Form::open(array('url'=>'formation'))}}

    {{ var_dump($errors->all()) }}

    <div class="form-group">
        {{ Form::label('id','id')}}
        {{ Form::text('id','', array('class'=>'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('intitule','intitule')}}
        {{ Form::text('intitule','', array('class'=>'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('prix','prix')}}
        {{ Form::text('prix','', array('class'=>'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('note','note')}}
        {{ Form::text('note','', array('class'=>'form-control','placeholder'=>'Entrez une note au format numérique'))}}
    </div>

    <div class="form-group">
        {{ Form::label('description','description')}}
        {{ Form::text('description','', array('class'=>'form-control','placeholder'=>'Entrez la description'))}}
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

{{ Form::submit('Créer une formation'), array('class'=>'btn btn-primary') }}

<!--Fin du formulaire-->
    {{ Form::close() }}

</body>
</html>