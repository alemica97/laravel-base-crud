@extends('layouts.app')

@section('title','Comic')

@section('content')

<main>
    <div class="container show py-5">
        <figure class="thumb">
            <img src="{{ $comic->thumb }}" alt="">
        </figure>
        <h1 class="show-title">{{ $comic->title }}</h1>
        <p class="show-par mb-0">{{ $comic->description }}</p>
        <ul class="py-4 px-4 mb-0">
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
    <div class="container py-5">
        <form>
            <a href="{{ route('comics.edit', $comic->id) }}">
                <input type="button" class="btn btn-primary" value="Edit this Comic!">
            </a>
        </form>
    </div>
</main>

@endsection