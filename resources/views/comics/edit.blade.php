@extends('layouts.app')

@section('title','Edit Comic')

@section('content')

<main>
    
    <div class="container edit py-5">
        <h1 class="mb-3">Edit Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- nel campo value faccio stampare lélemento che c'è già  --}}
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ? old('title') : $comic->title }}" name="title" id="title" placeholder="Insert Comic's title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" style="height: 100px" placeholder="Insert Comic's description">
                    {{ old('description') ? old('description') : $comic->description}}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}" name="thumb" id="thumb" placeholder="Insert Comic's thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ? old('price') : $comic->price }}" name="price" id="price" placeholder="Insert Comic's price ($ xx.xx)">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{ old('form-label') ? old('form-label') : $comic->series }}" name="series" id="series" placeholder="Insert Comic's series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date (YYYY-MM-DD)">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" value="{{ old('artists') ? old('artists') : implode(",", $comic->artists) }}" name="artists" id="artists" placeholder="Insert Comic's artists with ' , '">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" value="{{ old('writers') ? old('writers') : implode(",", $comic->writers) }}" name="writers" id="writers" placeholder="Insert Comic's writers with ' , '">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="type" id="type">
                    <option selected>choose Comic's type</option>
                    <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                    <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                </select>
            </div>
            <div class="mb-3 py-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="mb-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

          </form>
    </div>
</main>

@endsection