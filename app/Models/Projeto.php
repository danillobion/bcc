<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [ 'titulo','conteudo','tipo','visualizacao','status','dataTermino','user_id','imagemCapa', 'dataInicio'];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
