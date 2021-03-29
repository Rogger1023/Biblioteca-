@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input
        type="text"
        class="form-control"
        value="{{ old('name', isset($user) ? $user->name : '') }}"
        name="name">
    @if ($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="birthday">Data de Nasc.</label>
    <input
        type="date"
        class="form-control"
        value="{{ old('birthday', isset($user) ? $user->birthday : '') }}"
        name="birthday">
    @if ($errors->has('birthday'))
        <div class="text-danger">{{ $errors->first('birthday') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input
        type="email"
        class="form-control"
        name="email"
        value="{{ old('email', isset($user) ? $user->email : '') }}">
    @if ($errors->has('email'))
        <div class="text-danger">{{ $errors->first('email') }}</div>
    @endif
</div>
