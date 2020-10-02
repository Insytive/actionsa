<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Municipality extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'municipalities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'province_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function municipalityAreas()
    {
        return $this->hasMany(Area::class, 'municipality_id', 'id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
