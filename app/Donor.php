<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $fillable =[
        'name_donor','email_donor', 'phone', 'password_donor',
    ];
    public function donation(){
        return $this->hasMany('App\Models\Donation');
    }
}
