<td>{{ $book->id }}</td>
<td>{{ $book->title }}</td>
<td>{{ $book->description }}</td>
<td>{{ $book->author }}</td>
<td>{{ $book->created_at->format('d/m/Y H:i') }}</td>
<td>
    <a href="{{ route('books.show', $book->id) }}"
       class="btn btn-sm btn-primary"
       title="Vizualizar"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-eye text-white"></i>
    </a>

    <a href="{{ route('books.edit', $book->id) }}"
       class="btn btn-sm btn-warning"
       title="Editar"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-pencil-alt text-white"></i>
    </a>

    <a href="{{ route('books.destroy', $book->id) }}"
       class="btn btn-sm btn-danger"
       title="Excluir"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-trash-alt text-white"></i>
    </a>
</td>
