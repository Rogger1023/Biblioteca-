@csrf
<div class="form-group">
    <label for="employer_id">Nome</label>
    <select class="form-control" name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}">
                {{$user->name}}
            </option>
        @endforeach
    </select>
    @if ($errors->has('user_id'))
        <div class="text-danger">{{ $errors->first('user_id') }}</div>
    @endif
</div>
<div class="form-group">
    <label for="employer_id">Livro</label>
    <select class="form-control" name="book_id">
        @foreach($books as $book)
            <option value="{{$book->id}}">
                {{$book->title}}
            </option>
        @endforeach
    </select>
    @if ($errors->has('book_id'))
        <div class="text-danger">{{ $errors->first('book_id') }}</div>
    @endif
</div>

