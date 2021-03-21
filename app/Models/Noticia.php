<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [ 'titulo','conteudo','visualizacao','user_id','imagemCapa'];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
