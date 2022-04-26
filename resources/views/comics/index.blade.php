@extends('partials.app')

@section('title','Tabella Comics')

@section('content')

<header>
    <div class="container py-3">
        <h4><a href="{{ route('comics.index') }}">Table - Home</a></h4>
    </div>
</header>

<main>
    <div class="container">
        <table class="table-striped">

            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}">visualizza</a></td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</main>

@endsection