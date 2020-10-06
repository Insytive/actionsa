<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all();

        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employees.create', compact('departments', 'positions'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employee->load('department', 'position');

        return view('admin.employees.edit', compact('departments', 'positions', 'employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->load('department', 'position');

        return view('admin.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
