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
    public function address(){
        return $this->hasOne(Adress::class,'city_id','name_donor');
    }
}
