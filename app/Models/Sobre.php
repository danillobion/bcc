<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    
    protected $fillable = [ 'texto'];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
