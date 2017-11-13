<?php

namespace prefeitura;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'departamento_id',
    ];

     public function departamento(){

    	return $this->belongsTo(Departamento::class);
    }
}
