<!DOCTYPE html>
<html>

<head>
    <title>Employee CRUD</title>
</head>

<body>

    <h1>Employee Management System</h1>

    <hr>

    <a href="{{ route('departments.index') }}">
        Departments
    </a>

    |

    <a href="{{ route('employees.index') }}">
        Employees
    </a>

    <hr>

    @yield('content')

</body>

</html>
