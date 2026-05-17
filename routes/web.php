<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::resource('departments', DepartmentController::class);

Route::resource('employees', EmployeeController::class);
