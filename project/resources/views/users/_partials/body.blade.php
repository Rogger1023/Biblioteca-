<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ date('d/m/Y', strtotime($user->birthday))}}</td>
<td>{{ $user->email }}</td>
<td>{{ date('d/m/Y', strtotime( $user->created_at)) }}</td>
<td>
    <a href="{{ route('users.show', $user->id) }}"
       class="btn btn-sm btn-primary"
       title="Show"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-eye text-white"></i>
    </a>

    <a href="{{ route('users.edit', $user->id) }}"
       class="btn btn-sm btn-warning"
       title="Edit"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-pencil-alt text-white"></i>
    </a>

    <a href="{{ route('users.destroy', $user->id) }}"
       class="btn btn-sm btn-danger"
       title="destroy"
       data-toggle="tooltip"
       data-placement="top"
       role="button">
        <i class="fas fa-trash-alt text-white"></i>
    </a>
</td>
