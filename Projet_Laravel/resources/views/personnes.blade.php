<h1>Liste des personnes</h1>
<a href="/films">Voir les films</a>


@foreach($personnes as $personne)
    <br>
    <a href="/personne/{{$personne->id}}">{{$personne->nom . " ". $personne->prenom}}</a>
@endforeach
