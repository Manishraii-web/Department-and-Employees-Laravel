@extends('layouts.app')

@section('content')

<h2>Employee Details</h2>

<hr>

<h3>Name: {{ $employee->name }}</h3>

<h3>Email: {{ $employee->email }}</h3>

<h3>Department:
    {{ $employee->department->name ?? 'No Department' }}
</h3>

<h3>Position: {{ $employee->position }}</h3>

<h3>Salary: {{ $employee->salary }}</h3>

<h3>Status: {{ $employee->status }}</h3>

<h3>Created At: {{ $employee->created_at }}</h3>

<hr>

<a href="{{ route('employees.index') }}">
    Back
</a>

@endsection
