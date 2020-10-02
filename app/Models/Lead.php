<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Lead extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    // public $table = 'leads';

    public static $searchable = [
        'first_name',
        'last_name',
    ];

    const GENDER_SELECT = [
        '1' => 'Male',
        '2' => 'Female',
    ];

    const FIRST_TIME_VOTER_RADIO = [
        '1' => 'Yes',
        '2' => 'No',
    ];

    protected $dates = [
        'birthdate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const INTEREST_RADIO = [
        '1' => 'Supporter',
        '2' => 'Membership',
    ];

    const LEAD_STATUS_SELECT = [
        '1' => 'Incomplete',
        '2' => 'Being Vetted',
        '3' => 'Completed',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'gender',
        'lead_email',
        'address',
        'building',
        'town',
        'city',
        'reported_station',
        'first_time_voter',
        'lead_status',
        'interest',
        'id_number',
        'phone',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at',
        'province_id',
        'station_id',
        'user_id',
        'member_id',
        'employee_id',
        'volunteer_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getBirthdateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class, 'volunteer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
