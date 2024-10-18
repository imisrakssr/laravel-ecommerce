<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_id',
        'status',
    ];

    public function state()
    {
    return $this->belongsTo(State::class);
    }
}
