<td>{{ $lend->id }}</td>
<td>{{ $lend->name }}</td>
<td>{{ date('d/m/Y', strtotime($lend->date_lend))}}</td>

<td>
    <a href="{{ route('lends.show', $lend->id) }}"
       class="btn btn-sm btn-primary"
       title="Show"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-eye text-white"></i>
    </a>

    <a href="{{ route('lends.edit', $lend->id) }}"
       class="btn btn-sm btn-warning"
       title="Edit"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-pencil-alt text-white"></i>
    </a>

    <a href="{{ route('lends.destroy', $lend->id) }}"
       class="btn btn-sm btn-danger"
       title="destroy"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-trash-alt text-white"></i>
    </a>
</td>
