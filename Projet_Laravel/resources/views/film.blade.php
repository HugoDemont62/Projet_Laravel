Le nom du film est :{{$film->titre}} réalisé par
@if($film->idRealisateur == null)
    Réalisateur inconnu
@else
    <a href="/personne/{{$realisateur->id}}">
        {{$realisateur->nom}} {{$realisateur->prenom}}
    </a>

@endif
avec {{$film->nbSpectateurs}} de spectateurs
et il est sorti en {{$film->annee}}

