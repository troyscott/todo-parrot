<?php

namespace Todoparrot;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function todolist()
	{
		return $this->belongsTo('Todoparrot\Todolist');	
	}
}
