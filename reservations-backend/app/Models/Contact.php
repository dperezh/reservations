<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = array('name', 'phone_number', 'birth_date');

    protected $hidden = array('created_at', 'updated_at', 'contact_type_id');

    public function contactType()
    {
        return $this->belongsTo(ContactType::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
