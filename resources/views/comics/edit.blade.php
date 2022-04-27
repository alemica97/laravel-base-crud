@extends('partials.app')

@section('title','Edit Comic')

@section('content')

<header>
    <div class="container py-3">
        <h4><a href="{{ route('comics.index') }}">Table - Home</a></h4>
    </div>
</header>

<main>
    
    <div class="container">
        <h1>Edit Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- nel campo value faccio stampare lélemento che c'è già  --}}
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" value="{{ $comic->title }}" name="title" id="title" placeholder="Insert Comic's title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" style="height: 100px" placeholder="Insert Comic's description">
                    {{ $comic->description}}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb" id="thumb" placeholder="Insert Comic's thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" value="{{ $comic->price }}" name="price" id="price" placeholder="Insert Comic's price ($ xx.xx)">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" value="{{ $comic->series }}" name="series" id="series" placeholder="Insert Comic's series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" value="{{ $comic->sale_date }}" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date (YYYY-MM-DD)">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" value="{{ implode(",", $comic->artists) }}" name="artists" id="artists" placeholder="Insert Comic's artists with ' , '">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" class="form-control" value="{{ implode(",", $comic->writers) }}" name="writers" id="writers" placeholder="Insert Comic's writers with ' , '">
            </div>
            <select class="form-select" aria-label="Default select example" name="type" id="type">
                <option selected>choose Comic's type</option>
                <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</main>

@endsection