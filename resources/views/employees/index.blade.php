@extends('layouts.app')

@section('content')

<h2>Employee List</h2>

<a href="{{ route('employees.create') }}">
    Add Employee
</a>

<br><br>

<form method="GET" action="{{ route('employees.index') }}">

    <input type="text"
           name="search"
           placeholder="Search employee..."
           value="{{ request('search') }}">

    <button type="submit">
        Search
    </button>

</form>

<br>

<table border="1" cellpadding="10">

    <tr>

        <th>ID</th>

        <th>Name</th>

        <th>Email</th>

        <th>Department</th>

        <th>Position</th>

        <th>Salary</th>

        <th>Status</th>

        <th>Created At</th>

        <th>Action</th>

    </tr>

    @foreach ($employees as $employee)

        <tr>

            <td>{{ $employee->id }}</td>

            <td>{{ $employee->name }}</td>

            <td>{{ $employee->email }}</td>

            <td>
                {{ $employee->department->name ?? 'No Department' }}
            </td>

            <td>{{ $employee->position }}</td>

            <td>{{ $employee->salary }}</td>

            <td>{{ $employee->status }}</td>

            <td>{{ $employee->created_at }}</td>

            <td>

                <a href="{{ route('employees.show', $employee->id) }}">
                    Show
                </a>

                |

                <a href="{{ route('employees.edit', $employee->id) }}">
                    Edit
                </a>

                |

                <form action="{{ route('employees.destroy', $employee->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

</table>

<br>

{{ $employees->links() }}

@endsection
