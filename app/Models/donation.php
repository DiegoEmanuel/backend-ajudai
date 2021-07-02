<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donations extends Model
{
    use HasFactory;

    protected $table="donation";

    public function adress_donor(){
        return $this->hasOne('adress_donor::class');    //'chave_estrangeira','campo_estrangeiro'
    }
}
