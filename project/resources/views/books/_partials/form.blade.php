@csrf
<div class="form-group">
    <label for="title">Título</label>
    <input
        type="text"
        class="form-control"
        value="{{ old('title', isset($book) ? $book->title : '') }}"
        name="title">
    @if ($errors->has('title'))
        <div class="text-danger">{{ $errors->first('title') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="author">Autor</label>
    <input
        type="text"
        class="form-control"
        value="{{ old('author', isset($book) ? $book->author : '') }}"
        name="author">
    @if ($errors->has('author'))
        <div class="text-danger">{{ $errors->first('author') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    <textarea class="form-control" name="description">{{ old('description', isset($book) ? $book->description : '') }}
    </textarea>
    @if ($errors->has('description'))
        <div class="text-danger">{{ $errors->first('description') }}</div>
    @endif
</div>
