@extends('layouts.app')

@section('content')
    <h1 class="text-white mb-5">Vizualizar Usuário</h1>
    <div class="container pb-5">
        <div class="card card-body">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    value="{{ $user->name }}"
                    disabled
                    name="name">
            </div>

            <div class="form-group">
                <label for="birthday">Data de Nasc.</label>
                <input
                    type="text"
                    class="form-control"
                    value="{{ $user->birthday }}"
                    disabled
                    name="bitrhday">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input disabled class="form-control" name="email" value="{{ $user->email }}">
            </div>

        </div>
    </div>
@endsection
