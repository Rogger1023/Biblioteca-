@extends('layouts.app')

@section('content')
    <h1 class="text-white mb-5">Criar empréstimo</h1>
    <div class="container pb-5">
        <div class="card card-body">
            <form method="POST" action="{{ route('lends.store') }}" class="p-3">
                @include('lends._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
