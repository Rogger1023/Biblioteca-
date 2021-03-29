@extends('layouts.app')

@section('content')
    <h1 class="text-white mb-5">Criar Livro</h1>
    <div class="container pb-5">
        <div class="card card-body">
            <form method="POST" action="{{ route('books.store') }}" class="p-3">
                @include('books._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
