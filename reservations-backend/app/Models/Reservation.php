<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = array('date', 'ranking', 'favorite');

    protected $hidden = array('contact_id');

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
