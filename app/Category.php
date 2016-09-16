<?php

namespace Todoparrot;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
   public function todolists()
   {
		return $this->belongsToMany('Todoparrot\Todolist');   
   }
}
