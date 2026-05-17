<h1>Department Details</h1>

<hr>

<h3>ID: {{ $department->id }}</h3>

<h3>Name: {{ $department->name }}</h3>

<h3>Created At: {{ $department->created_at }}</h3>

<h3>Updated At: {{ $department->updated_at }}</h3>

<hr>

<a href="{{ route('departments.index') }}">
    Back
</a>
