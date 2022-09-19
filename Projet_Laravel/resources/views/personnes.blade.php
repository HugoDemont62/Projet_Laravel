<h1>Liste des personnes</h1>
<a href="/films">Voir les films</a>

<ul>
    @foreach($personnes as $personne)
        <li>
            <a href="/personne/{{$personne->id}}">{{$personne->nom . " ". $personne->prenom}}</a>
        </li>
    @endforeach

</ul>

