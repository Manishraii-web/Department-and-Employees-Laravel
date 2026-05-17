<h1>All Departments</h1>

<a href="{{ route('departments.create') }}">
    Add Department
</a>

<hr>

@foreach($departments as $department)

    <h3>{{ $department->name }}</h3>

    <a href="{{ route('departments.show', $department->id) }}">
        View
    </a>

    <a href="{{ route('departments.edit', $department->id) }}">
        Edit
    </a>

    <form action="{{ route('departments.destroy', $department->id) }}"
          method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>

    </form>

    <hr>

@endforeach
