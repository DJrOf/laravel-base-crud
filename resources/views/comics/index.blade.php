@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">


        @foreach ($comics as $comic)
            <div class="card p-5">
                <figure>
                    <img src="{{ $comic->thumb }}" alt="">
                </figure>
                <h2>{{ $comic->title }}</h2>
                <div>{{ $comic->price }}</div>
                <div>{{ $comic->description }}</div>
                <a
                    href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a>
                <a class="btn btn-sm btn-warning"
                    href="{{ route('comics.edit', $comic->id) }}"
                    style="width: 50px">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <form action="{{ route('comics.destroy', $comic->id) }}"
                    method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" 
                        type="submit"
                        style="width: 50px">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        @endforeach


    </div>


    </div>
@endsection
