@extends('layouts.app')

@section('content')

<h2>Create Employee</h2>

<form action="{{ route('employees.store') }}"
      method="POST">

    @csrf

    <label>Department</label>

    <select name="department_id">

        @foreach ($departments as $department)

            <option value="{{ $department->id }}">
                {{ $department->name }}
            </option>

        @endforeach

    </select>

    <br><br>

    <input type="text"
           name="name"
           placeholder="Name">

    <br><br>

    <input type="email"
           name="email"
           placeholder="Email">

    <br><br>

    <input type="text"
           name="position"
           placeholder="Position">

    <br><br>

    <input type="number"
           step="0.01"
           name="salary"
           placeholder="Salary">

    <br><br>

    <select name="status">

        <option value="active">
            Active
        </option>

        <option value="inactive">
            Inactive
        </option>

    </select>

    <br><br>

    <button type="submit">
        Save Employee
    </button>

</form>

@endsection
