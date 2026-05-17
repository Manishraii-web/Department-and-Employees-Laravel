<h1>Create Department</h1>

<form action="{{ route('departments.store') }}"
      method="POST">

    @csrf

    <input type="text"
           name="name"
           placeholder="Department Name">

    <button type="submit">
        Save Department
    </button>

</form>
