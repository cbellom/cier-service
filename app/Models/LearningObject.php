<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningObject extends Model
{
  protected $table = 'learning_object';
  
  protected $fillable = ['id', 'code_lo', 'level', 'grade', 'matter' , 'name_lo' ];
}
