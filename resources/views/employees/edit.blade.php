@extends('layouts.app')

@section('content')

<h2>Edit Employee</h2>

<form action="{{ route('employees.update', $employee->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <label>Department</label>

    <select name="department_id">

        @foreach ($departments as $department)

            <option value="{{ $department->id }}"
                {{ $employee->department_id == $department->id ? 'selected' : '' }}>

                {{ $department->name }}

            </option>

        @endforeach

    </select>

    <br><br>

    <input type="text"
           name="name"
           value="{{ $employee->name }}">

    <br><br>

    <input type="email"
           name="email"
           value="{{ $employee->email }}">

    <br><br>

    <input type="text"
           name="position"
           value="{{ $employee->position }}">

    <br><br>

    <input type="number"
           step="0.01"
           name="salary"
           value="{{ $employee->salary }}">

    <br><br>

    <select name="status">

        <option value="active"
            {{ $employee->status == 'active' ? 'selected' : '' }}>
            Active
        </option>

        <option value="inactive"
            {{ $employee->status == 'inactive' ? 'selected' : '' }}>
            Inactive
        </option>

    </select>

    <br><br>

    <button type="submit">
        Update Employee
    </button>

</form>

@endsection
