<?php
namespace Modules\HumanResource\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Modules\HumanResource\Models\Employee;

use App\Models\Division;
use App\Models\Position;
use App\Models\Unit;
use App\Models\User;

use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('HumanResource/Pages/Employee/Index', [
            'employees' => User::orderByDesc('name')
                ->filter($request->only('search', 'trashesd'))
                ->when($request->filled('name'), function ($query) {
                    $query->where('name', request('name'));
                })
                ->paginate(12)
                ->withQueryString()
                ->through(function ($model) {
                    return [
                        'id' => $model->id,
                        'name' => $model->name,
                        'email' => $model->email,
                        'status' => $model->status,
                    ];
                }),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'employee_number' => 'required|string',
            'position_id' => 'required|numeric',
            'division_id' => 'required|numeric',
            'unit_id' => 'required|numeric',
            'mobile' => 'required|string',
        ]);

        $request->merge([
            'status_id' => 1,
            'user_id' => \Auth::user()->id,
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.edit', ['employee' => \Auth::user()->id])->with('success', 'Profile created successfully!');

    }

    public function edit(User $employee)
    {
        $employee->load('employee');

        return Inertia::render('HumanResource/Pages/Employee/Edit', [
            'employee' => [
                'id' => $employee->id,
                'name' => $employee->name,
                'employee_number' => $employee->employee_number,
                'position_id' => $employee->position_id,
                'division_id'=> $employee->division_id,
                'unit_id' => $employee->unit_id,
                'mobile' => $employee->mobile,
                'email' => $employee->email,
                'details' => Employee::where('user_id', $employee->id)->first(),
            ],
            'positions' => Position::all(['id', 'name']),
            'divisions' => Division::all(['id', 'name']),
            'units' => Unit::all(['id', 'name']),
        ]);
    }

    // public function update(Organization $organization)
    // {
    //     $organization->update(
    //         Request::validate([
    //             'name' => ['required', 'max:100'],
    //             'email' => ['nullable', 'max:50', 'email'],
    //             'phone' => ['nullable', 'max:50'],
    //             'address' => ['nullable', 'max:150'],
    //             'city' => ['nullable', 'max:50'],
    //             'region' => ['nullable', 'max:50'],
    //             'country' => ['nullable', 'max:2'],
    //             'postal_code' => ['nullable', 'max:25'],
    //         ])
    //     );

    //     return Redirect::back()->with('success', 'Organization updated.');
    // }
}
