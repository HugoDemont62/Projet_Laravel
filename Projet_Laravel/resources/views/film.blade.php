Le nom du film est :{{$film->titre}} réalisé par
@if($film->realisateur->idRealisateur == null)
    Réalisateur inconnu
@else
    <a href="/personne/{{$realisateur->id}}">
        {{$film->realisateur->nom}}  {{$film->realisateur->prenom}}
    </a>

@endif
<br><br>
Avec {{$film->nbSpectateurs}} de spectateurs
et il est sorti en {{$film->annee}}
<br>
les acteurs sont :
<ul>
@foreach($film->acteurs AS $acteur)
    <li>
        <a href="/personne/{{$acteur->id}}">
            {{$acteur->nom}}  {{$acteur->prenom}}
        </a>

    </li>
@endforeach
</ul>
