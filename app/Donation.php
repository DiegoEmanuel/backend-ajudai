<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    // protected $fillable = ['id_association'];
    public function donor(){
        return $this->belongsTo('App\models\donor');
    }
}
