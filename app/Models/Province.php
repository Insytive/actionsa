<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Province extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'provinces';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function provinceMunicipalities()
    {
        return $this->hasMany(Municipality::class, 'province_id', 'id');
    }

    public function provinceLeads()
    {
        return $this->hasMany(Lead::class, 'province_id', 'id');
    }
}
