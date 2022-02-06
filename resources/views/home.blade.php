<div class="body">
<div class="container">
    @foreach ($movies as $movie)
    <div class="card">
        <ul>
            <h4>{{$movie['title']}}</h4>
            <li>
                <p>{{$movie['original_title']}}</p>
            </li>
            <li>
                <p>{{$movie['date']}}</p>
            </li>
            <li>
                <h6>{{$movie['vote']}}</h6>
            </li>
        </ul>
    </div>
    @endforeach
</div>
</div>

