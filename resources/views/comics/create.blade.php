@extends('partials.app')

@section('title','Create Comic')

@section('content')

<header>
    <div class="container py-3">
        <h4><a href="{{ route('comics.index') }}">Table - Home</a></h4>
    </div>
</header>

<main>
    <div class="container">
        <h1>Create a new Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Insert Comic's title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" style="height: 100px" placeholder="Insert Comic's description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Insert Comic's thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Insert Comic's price ($ xx.xx)">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Insert Comic's series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Insert Comic's Sale Date (YYYY-MM-DD)">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>choose Comic's type</option>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</main>

@endsection