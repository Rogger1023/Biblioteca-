<td>{{ $lend->id }}</td>
<td>{{ $lend->title }}</td>
<td>{{ $lend->user->name }}</td>
<td>{{ date('d/m/Y', strtotime($lend->created_at))}}</td>

<td>
    <a href="{{ route('lends.unlink', $lend->id) }}"
       class="btn btn-sm btn-danger"
       title="unlink"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-trash-alt text-white"></i>
    </a>
</td>
