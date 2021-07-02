<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adress_donor extends Model
{
    use HasFactory;

    public function donations(){
        return $this->belongsTo(donation::class);

        //convenção p indentificar chave estrangeira
        //nome do método e acrescentar o sufixo_id = donations_id

    }
}
