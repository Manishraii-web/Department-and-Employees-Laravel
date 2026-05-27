<?php

namespace App\Services;
use App\Models\Employee;

class EmployeeService{
    public function  __construct(protected Employee $employee){ }
//------------------------------------------------------------------------------
    public function createEmployee($request){
       return $this->employee
       ->when($request->search, function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');

    })
    ->orderBy('created_at', 'desc')
    ->paginate(3);

}
//------------------------------------------------------------------------------
public function storeEmployee($data){
    return $this->employee->create($data);
}
//------------------------------------------------------------------------------

 public function find($id)
    {
        return $this->employee->findOrFail($id);
    }

    //---------------------------------------------------------------------------
    public function updateEmployee($request, string $id)
    {
        $employee = $this->find($id);
        $data = $request->all();
     return $employee->update($data);
}
    //-----------------------------------------------------------------------

    public function deleteEmployee( string $id)
    {
        return $this->find($id)->forceDelete();
    }
}


