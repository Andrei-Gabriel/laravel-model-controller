@section('pageContent')
    @foreach ($movies as $movie)
    <div class="card">
        <span class="card__original-title">{{$movie['original_title']}}</span>
        <span class="card__title">{{$movie->title}}</span>
        <span class="card__nationality">{{$movie['nationality']}}</span>
        <span class="card__date">{{$movie->date}}</span>
        <span class="card__vote">{{$movie['vote']}}</span>
    </div>
    @endforeach
@endsection
