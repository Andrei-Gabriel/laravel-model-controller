@foreach ($movies as $movie)
    <div class="card">
        <h3>{{$movie['original_title']}}</h3>
    </div>
@endforeach