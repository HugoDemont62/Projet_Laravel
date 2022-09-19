<h1>Ici la liste des films</h1>
<a href="/personnes">Voir toutes les personnes</a>


<ul>
    @foreach($films as $film)
        <li>
            <a href="/film/{{$film->id}}">{{$film->titre}}</a>
        </li>
    @endforeach

</ul>
