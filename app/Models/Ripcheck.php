<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ripcheck extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'rip_name',
        'rip_email',
        'rip_number',
        'rip_phone',
    ];
    public function getStatus()
    {
        // return $this->rip_status == '1' ? 'سارق' : 'ثقة';
        if ($this->rip_status == '1')
            return 'Fake';
        else if ($this->rip_status == '0')
            return 'Trusted';
        return 'New fake';
        // return $this->rip_status == '1' ? 'Fake' : 'Trusted';
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'rip_user_id');
    }
}
