<?php
namespace Modules\HumanResource\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Modules\HumanResource\Models\Employee;
// use Modules\HumanResource\Models\LeaveType;

use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('HumanResource/Pages/Employee/Index', [
            'employees' => Employee::orderByDesc('name')
                ->filter($request->only('search', 'trashesd'))
                ->when($request->filled('name'), function ($query) {
                    $query->where('name', request('name'));
                })
                ->paginate(12)
                ->withQueryString()
                ->through(function ($model) {
                    return [
                        'id' => $model->id,
                        // 'leaveType' => $model->leaveType->name,
                        // 'start_date' => $model->start_date,
                        // 'end_date' => $model->end_date,
                        // 'leave_duration' => $model->leave_duration,
                        // 'number_of_days' => $model->number_of_days,
                        // 'reason' => $model->reason,
                        // 'status' => $model->status,
                    ];
                }),
            // 'leaveTypes' => LeaveType::all(['id', 'name']),
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'leave_type_id' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required|string',
            // 'user_id' => 'required|numeric',
        ]);

        $request->merge([
            'status_id' => 'pending',
            'user_id' => \Auth::user()->id,
        ]);

        // Create a new leave
        Leave::create($request->all());

        // Redirect to the index page or wherever appropriate
        return redirect()->route('leave.index')->with('success', 'Leave created successfully!');
    }
}
