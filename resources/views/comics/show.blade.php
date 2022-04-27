@extends('partials.app')

@section('title','Comic')

@section('content')

<header>
    <div class="container py-3">
        <h4><a href="{{ route('comics.index') }}">Table - Home</a></h4>
    </div>
</header>

<main>
    <div class="container py-5">
        <figure class="thumb">
            <img src="{{ $comic->thumb }}" alt="">
        </figure>
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <ul class="py-4">
            <li>
                <span><strong>Series: </strong>{{ $comic->series }}</span>
            </li>
            <li>
                <span><strong>Sale Date: </strong>{{ $comic->sale_date }}</span>
            </li>
            <li>
                <span><strong>Type: </strong>{{ $comic->type }}</span>
            </li>
            <li>
                <span><strong>Price: </strong>{{ $comic->price }}</span>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Artists</h4>
                @foreach ($comic->artists as $artist)
                    <span>{{ $artist }}, </span>
                @endforeach
            </div>
            <div class="col">
                <h4>Writers</h4>
                @foreach ($comic->writers as $writer)
                    <span>{{ $writer }}, </span>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection