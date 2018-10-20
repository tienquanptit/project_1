<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'name',
        'code',
    ];

    public function district()
    {
        return $this->hasMany('App\Models\District');
    }
}
