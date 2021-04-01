@csrf
<div class="form-group">
    <label for="employer_id">Nome</label>
    <select class="form-control" name="employer_id">
        @foreach($users as $user)
            <option
                value="{{$user->id}}"
                {{old('employer_id', isset($book) ? $book->employer_id: '') == $user->id ? 'selected': ''}}>
                {{$user->name}}
            </option>
        @endforeach
    </select>
    @if ($errors->has('employer_id'))
        <div class="text-danger">{{ $errors->first('employer_id') }}</div>
    @endif
</div>
<div class="form-group">
    <label for="employer_id">Livro</label>
    <select class="form-control" name="employer_id">
        @foreach($books as $book)
            <option
                value="{{$book->id}}"
                {{old('employer_id', isset($book) ? $book->employer_id: '') == $book->id ? 'selected': ''}}>
                {{$book->title}}
            </option>
        @endforeach
    </select>
    @if ($errors->has('book_id'))
        <div class="text-danger">{{ $errors->first('book_id') }}</div>
    @endif
</div>

