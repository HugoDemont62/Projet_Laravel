@foreach($genres AS $genre)

    <ul>
        <li>
            <a href="/genre/{{$genre->id}}">{{$genre->type}}</a>
        </li>
    </ul>

@endforeach
