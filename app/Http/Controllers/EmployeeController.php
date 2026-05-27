<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmployeeWelcomeMail;
use App\Models\Department;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct(protected EmployeeService $employeeService){ }
//------------------------------------------------------------------------------
    public function index(Request $request)
    {
        $employees = $this->employeeService->createEmployee($request);
        return view('employees.index', compact('employees'));
    }
//------------------------------------------------------------------------------

   public function create()
{
    $departments = Department::all();
    return view(
        'employees.create',
        compact('departments')
    );
}
   //----------------------------------------------------------------------------
    public function store(Request $request) {
        $employee =
        $this->employeeService->storeEmployee(
      $request->all());
    //   $request->file('image'));

    SendEmployeeWelcomeMail::dispatch($employee);

    return redirect()
    ->route('employees.index')
    ->with('success', 'Employee created successfully.');

}
//------------------------------------------------------------------------------

public function show(string $id)
    {
        $employee = $this->employeeService->find($id);
        return view("employees.show", compact('employee'));
    }
    //-------------------------------------------------------------------------

    public function edit(string $id)
{
    $employee = $this->employeeService->find($id);
    $departments = Department::all();
    return view(
        'employees.edit',
        compact('employee', 'departments')
    );
}
    //------------------------------------------------------------------------------
    public function update(Request $request, string $id)
    {
        $this->employeeService->updateEmployee($request, $id);
        return redirect()
            ->route('employees.index')
            ->with('success', 'Employee updated successfully!');
    }
    //----------------------------------------------------------------

    public function destroy(string $id)
    {
        $this->employeeService->deleteEmployee($id);
        return redirect()
            ->route('employees.index')
            ->with('success', 'Employee deleted successfully!');
    }

}
