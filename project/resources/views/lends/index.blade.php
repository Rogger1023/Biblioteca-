@extends('layouts.app')
@section('content')
    <h1 class="text-white mb-5">Empŕestimos</h1>
    <div class="container pb-5">
        <div class="card card-body">
            <div class="row">
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Pesquisar" name="query">
                </div>

                <div class="col-3">
                    <a href="{{ route('lends.create') }}" class="btn btn-primary btn-block">Novo empréstimo</a>
                </div>
            </div>

            <div class="row col-12 mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        @include('lends._partials.head')
                    </tr>
                    </thead>
                    <tbody>

                    @if ($lends->count() > 0)
                        @foreach($lends as $lend)
                            <tr>
                                @include('lends._partials.body')
                            </tr>
                        @endforeach
                    @else
                        @include('shared.empty-table')
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
