<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = [
	'comentario'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function product(){
    	return $this->belongsTo(User::class);
    }
}
