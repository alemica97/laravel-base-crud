@extends('partials.app')

@section('title','Tabella Comics')

@section('content')

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
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</main>

@endsection