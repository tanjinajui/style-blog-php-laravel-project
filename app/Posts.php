<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable=['post_title', 'categories_id', 'post_description', 'post_picture'];
    
    public function categories()
    {
    	return $this->belongsTo(Categories::class);
    }
}
