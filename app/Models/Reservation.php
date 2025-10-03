<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = false;

   public function user() {
    return $this->belongsTo(User::class, 'user_id');
}

public function bus() {
    return $this->belongsTo(Bus::class, 'bus_id');
}
}
