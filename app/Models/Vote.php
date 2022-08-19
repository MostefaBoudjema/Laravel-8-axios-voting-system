<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ripcheck_id',
        'sign',
    ];
    public function rip_check()
    {
        return $this->belongsTo(Ripcheck::class);
    }  
}
