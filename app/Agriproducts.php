<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Agriproducts extends Model
{
	protected $fillable = ['title','body','published_at','user_id'];

	public function setPublishedAatAtribute($date)
	{
		$this->atributes['published_at'] = Carbon::parse($date);
	}

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	public function user()
	{
		return $this->belongTo('App\User');
	}

}
