<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
     use HasFactory;
    protected $fillable =[
        'name_donor',
        'id_city',
        'street_donor',
        'dristrict_donor',
        'number_donor',
        'complement_donor',
    ];
    // foreign('name_donor')**foreign('id_city)
}
