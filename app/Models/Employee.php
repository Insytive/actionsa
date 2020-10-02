<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Employee extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'employees';

    public static $searchable = [
        'employee_code',
    ];

    const EMPLOYMENT_TYPE_SELECT = [
        '0' => 'Part Time',
        '1' => 'Contractor',
        '2' => 'Permanent',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const EMPLOYEE_STATUS_SELECT = [
        '0' => 'Active',
        '1' => 'On Leave',
        '2' => 'Unpaid Leave',
        '3' => 'Suspended',
        '4' => 'Teminated',
        '5' => 'Deceased',
    ];

    protected $fillable = [
        'employee_code',
        'employee_status',
        'employment_type',
        'start_date',
        'end_date',
        'slack',
        'skype',
        'anydesk',
        'office_email',
        'office_phone',
        'office_fax',
        'department_id',
        'position_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
