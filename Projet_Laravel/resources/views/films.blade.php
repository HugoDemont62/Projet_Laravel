<h1>Ici la liste des films</h1>
<a href="/personnes">Voir toutes les personnes</a>



@foreach($films as $film)
    <br>
    <a href="/film/{{$film->id}}">{{$film->titre}}</a>
@endforeach
