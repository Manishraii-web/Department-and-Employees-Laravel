<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DepartmentService;

class DepartmentController extends Controller
{
    public function __construct(protected DepartmentService $departmentService) {}
//------------------------------------------------------------------------------
    public function index()
    {
        $departments = $this->departmentService->getAll();

        return view(
            'departments.index',
            compact('departments')
        );
    }
//------------------------------------------------------------------------------
    public function create()
    {
        return view('departments.create');
    }
//------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $this->departmentService
            ->storeDepartment($request->all());

        return redirect()
            ->route('departments.index')
            ->with('success', 'Department Created Successfully');
    }
//------------------------------------------------------------------------------
    public function show(string $id)
    {
        $department = $this->departmentService->find($id);

        return view(
            'departments.show',
            compact('department')
        );
    }
//------------------------------------------------------------------------------
    public function edit(string $id)
    {
        $department = $this->departmentService->find($id);

        return view(
            'departments.edit',
            compact('department')
        );
    }
//------------------------------------------------------------------------------
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $this->departmentService
            ->updateDepartment($request, $id);

        return redirect()
            ->route('departments.index')
            ->with('success', 'Department Updated Successfully');
    }
//------------------------------------------------------------------------------
    public function destroy(string $id)
    {
        $this->departmentService
            ->deleteDepartment($id);

        return redirect()
            ->route('departments.index')
            ->with('success', 'Department Deleted Successfully');
    }
}
