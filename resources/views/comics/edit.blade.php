@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label"><title></title></label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description"
                            name="description"
                            value="{{ old('description', $comic->description) }}">
                    </div>
                </div>
                <div class="col-4">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="thumb" class="form-control" id="thumb" name="thumb"
                        value="{{ old('thumb', $comic->thumb) }}">
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>
                </div>
                <div class="col-2">
                    <img src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg"
                        alt="placeholder" class="img-fluid" width="100px" id="preview">
                </div>
                <div class="col-4">
                    <label for="thumb" class="form-label">Series</label>
                    <input type="thumb" class="form-control" id="thumb" name="thumb"
                        value="{{ old('thumb', $comic->thumb) }}">
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-5">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ old('type', $comic->type) }}">
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex justify-content-center p-3">
                        <button type="reset" class="btn btn-danger me-2">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
