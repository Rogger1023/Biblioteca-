@extends('layouts.app')

@section('content')
    <h1 class="text-white mb-5">Vizualizar Livro</h1>
    <div class="container pb-5">
        <div class="card card-body">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input
                    type="text"
                    class="form-control"
                    value="{{ $book->title }}"
                    disabled
                    name="title">
            </div>

            <div class="form-group">
                <label for="author">Autor</label>
                <input
                    type="text"
                    class="form-control"
                    value="{{ $book->author }}"
                    disabled
                    name="author">
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea disabled class="form-control" name="description">{{ $book->description }}</textarea>
            </div>

        </div>
    </div>
@endsection
