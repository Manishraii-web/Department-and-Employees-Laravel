<div>

    <label>Name</label>

    <br>

    <input
        type="text"
        name="name"
        value="{{ old('name', $employee->name ?? '') }}"
    >

</div>

<br>

<div>

    <label>Email</label>

    <br>

    <input
        type="email"
        name="email"
        value="{{ old('email', $employee->email ?? '') }}"
    >

</div>

<br>

<div>

    <label>Phone</label>

    <br>
     <input
        type="text"
        name="phone"
        value="{{ old('phone', $employee->phone ?? '') }}"
    >

</div>

<br>

<div>

    <label>Department</label>

    <br>

    <input
        type="text"
        name="department"
        value="{{ old('department', $employee->department ?? '') }}"
    >

</div>

<br>

<div>

    <label>Salary</label>

    <br>

    <input
        type="number"
        name="salary"
        value="{{ old('salary', $employee->salary ?? '') }}"
      >

</div>

<br>

{{-- <div>

    <label>Photo</label>

    <br>

    <input
        type="file"
        name="image"
    >

</div> --}}

<br>
