<?php

namespace prefeitura;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	 protected $fillable = [
        'nome',];
        
     public function file(){
     	
    	return $this->hasMany(File::class);
    }
}
