@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">


        @foreach ($data as $item)
            <div class="card p-5">
                <figure>
                    <img src="{{ $item->thumb }}" alt="">
                </figure>
                <h2>{{ $item->title }}</h2>
                <div>{{ $item->price }}</div>
                <div>{{ $item->description }}</div>
                <a
                    href="{{ route('comics.show', ['comic' => $item->id]) }}">Dettagli</a>
                <a class="btn btn-sm btn-warning"
                    href="{{ route('comics.edit', $item->id) }}"
                    style="width: 50px">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <form action="{{ route('comics.destroy', $item->id) }}"
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
