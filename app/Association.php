<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_association',
        'city_id',
        'description',
        'leader_association',
        'email_association',
        'phone_association',
        'street_association',
        'district_associations',
        'number_associations',
        'complement_associations',
        'avatar_associations',
        'description_associations',
    ];
    public function cities(){
        return $this->hasMany(Association::class,'name_donor','name_donor');
    }
}
