<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'body', 'flagged_at'];

    /*
	 _ Ignore flagged signatures.
	 _
	 _ @param $query
	 _ @return mixed
	 _*/
	public function scopeIgnoreFlagged($query)
	{
	    return $query->where('flagged_at', null);
	}

	/*
	 _ Flag the given signature.
	 _
	 _ @return bool
	 */
	public function flag()
	{
	    return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
	}

	/*
	 _ Get the user Gravatar by their email address.
	 _
	 _ @return string  */
	public function getAvatarAttribute()
	{
	    return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
	}
}
