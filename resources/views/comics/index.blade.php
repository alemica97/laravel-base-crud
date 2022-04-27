@extends('partials.app')

@section('title','Tabella Comics')

@section('content')

<header>
    <div class="container py-3">
        <h4><a href="{{ route('comics.index') }}">Table - Home</a></h4>
    </div>
</header>

<main>
    <div class="container py-5">
        <table class="caption-top table-striped table-bordered">

            <caption>List of Comics</caption>

            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>
                <th scope="col">link</th>
                <th scope="col">modifica</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($comics as $comic)
            <tr">
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}">visualizza</a></td>
                <td><a href="{{ route('comics.edit', $comic->id) }}">Modifica</a></td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <div class="container py-2">
        <form>
            <a href="{{ route('comics.create') }}">
                <input type="button" class="btn btn-primary" value="Create a new Comic!">
            </a>
        </form>
    </div>
</main>

@endsection