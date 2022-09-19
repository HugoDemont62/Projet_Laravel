Il se nomme {{$personne->nom}} {{$personne->prenom}}
Il a réalisé :
@if($directed == null)
    Aucun film publié

@else
    @foreach($directed AS $di)
<ul>
        <li>
           <a href="/film/{{$di->id}}">{{$di->titre}}</a>
        </li>
</ul>
    @endforeach
@endif
