<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Conner\Likeable\LikeableTrait;

class Pin extends Model
{
	use LikeableTrait;

	protected $fillable = [
		'name',
		'description',
	];

	public function user() 
	{
		return $this->belongsTo(User::class);
	}
}
