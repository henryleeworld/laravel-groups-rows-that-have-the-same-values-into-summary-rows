<?php

namespace App\Models;

use Database\Factories\EmployeeTimesheetFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['employee_id', 'start', 'end'])]
class EmployeeTimesheet extends Model
{
    /** @use HasFactory<EmployeeTimesheetFactory> */
    use HasFactory;

    /**
     * Get the employee that owns the employee timesheet.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
