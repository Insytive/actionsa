<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Ward extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'wards';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'area_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function wardStations()
    {
        return $this->hasMany(Station::class, 'ward_id', 'id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
