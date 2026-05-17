<h1>Edit Department</h1>

<form action="{{ route('departments.update', $department->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $department->name }}"
           placeholder="Department Name">

    <button type="submit">
        Update Department
    </button>

</form>
