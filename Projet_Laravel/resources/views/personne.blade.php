Il se nomme {{$personne->nom}} {{$personne->prenom}}
Il a réalisé :
@if($personne->realisation  == null)
    Aucun film publié

@else
    @foreach($personne->realisation AS $di)
<ul>
        <li>
           <a href="/film/{{$di->id}}">{{$di->titre}}</a>
        </li>
</ul>
    @endforeach
@endif
