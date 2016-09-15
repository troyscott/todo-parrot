<?php

namespace Todoparrot;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
	{
		// use belongs to for tables with foriegn keys
		return $this->belongsTo('Todoparrot\User');
			
	}
}
