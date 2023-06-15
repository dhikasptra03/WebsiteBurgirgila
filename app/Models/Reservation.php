<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tel_number',
        'res_date',
        'guest_number',
        'table_id'
    ];

    protected $casts = [
        'res_date' => 'datetime',
        'request_date' => 'datetime'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class)->withDefault();
    }
}
