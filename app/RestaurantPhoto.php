<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPhoto extends Model
{
    protected $fillable = ['url','restaurant_id'];
    protected $appends = ['full_url']; // campos virtuais
    public $timestamps = false;

    protected function getFullUrlAttribute()
   	{
   		if ($this->attributes['url']) {
   			return 'https://s3.'.env('AWS_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/restaurante_photo/'.$this->attributes['url'];
   		} else {
   			return null;
   		}
   	}
}
