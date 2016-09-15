<?php

namespace Todoparrot;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    public function tasks()
	{
		// 1 side of the relationship defines the has many
		return $this->hasMany('Todoparrot\Task');	
		
	}
	
}
