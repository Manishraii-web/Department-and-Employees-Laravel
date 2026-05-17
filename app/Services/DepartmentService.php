<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService
{
    public function __construct( protected Department $department) {}
//------------------------------------------------------------------------------
    public function getAll()
    {
        return $this->department
            ->latest()
            ->paginate(5);
    }
//------------------------------------------------------------------------------
    public function storeDepartment($data)
    {
        return $this->department->create($data);
    }
//------------------------------------------------------------------------------
    public function find($id)
    {
        return $this->department->findOrFail($id);
    }
//------------------------------------------------------------------------------
    public function updateDepartment($request, string $id)
    {
        $department = $this->find($id);

        return $department->update([
            'name' => $request->name
        ]);
    }
//------------------------------------------------------------------------------
    public function deleteDepartment(string $id)
    {
        return $this->find($id)->delete();
    }
}
