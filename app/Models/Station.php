<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use \DateTimeInterface;

class Station extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'stations';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'ward_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function stationLeads()
    {
        return $this->hasMany(Lead::class, 'station_id', 'id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    static function byName($name)
    {
      return DB::table('stations')
            ->select(
                  'stations.name as station',
                  'wards.name AS ward',
                  'areas.name AS area',
                  'municipalities.name AS municipality',
                  'provinces.name AS province',
                  'stations.id AS stationID'
            )
            ->join('wards', 'stations.ward_id', '=', 'wards.id')
            ->join('areas', 'wards.area_id', '=', 'areas.id')
            ->join('municipalities', 'areas.municipality_id', '=', 'municipalities.id')
            ->join('provinces', 'municipalities.province_id', '=', 'provinces.id')
            ->where('stations.name', 'like', '%' . $name . '%')
            ->where('stations.approved', '=', 1)
            ->orderBy('stations.name', 'asc')
            ->get();
    }
}

