@extends('layouts.main')

@section('content')
    <div class="container">
        <figure>
            <img src="{{ $comic->thumb }}" alt="">
        </figure>
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
        <div>{{ $comic->price }}</div>
        <a href="{{ route('comics.index') }}">Home</a>
        <a href='{{ route('comics.edit', $comic->id) }}'
            class="btn btn-danger">Modifica</a>
    </div>
@endsection

