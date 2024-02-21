<?php

namespace Modules\HumanResource\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status_id',
        'name',
        'employee_number',
        'position_id',
        'division_id',
        'unit_id',
        'mobile',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function scopeFilter($query, array $filters)
    {   
        $query->when($filters['search'] ?? null, function ($query, $search) {
        // $query->when(data_get($filters, 'search'), function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')

                    // ->orWhereHas('leaveType', function ($query) use ($search) {
                    //     $query->where('name', 'like', '%' . $search . '%');
                    // })
                    // ->orWhere('start_date', 'like', '%' . $search . '%')
                    ->orWhere('employee_number', 'like', '%' . $search . '%');
            });
        });
    }
}
