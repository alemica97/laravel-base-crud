@extends('layouts.app')

@section('title','Create Comic')

@section('content')

<main>
    
    <div class="container create py-5">
        <h1 class="mb-3">Create a new Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="title" placeholder="Insert Comic's title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" value="{{ old('description') }}" name="description" id="description" style="height: 100px" placeholder="Insert Comic's description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" value="{{ old('thumb') }}" name="thumb" id="thumb" placeholder="Insert Comic's thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" value="{{ old('price') }}" name="price" id="price" placeholder="Insert Comic's price ($ xx.xx)">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" value="{{ old('series') }}" name="series" id="series" placeholder="Insert Comic's series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" value="{{ old('sale_date') }}" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date (YYYY-MM-DD)">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" value="{{ old('artists') }}" name="artists" id="artists" placeholder="Insert Comic's artists with ' , '">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" class="form-control" value="{{ old('writers') }}" name="writers" id="writers" placeholder="Insert Comic's writers with ' , '">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="type" id="type">
                    <option selected>choose Comic's type</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
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