<?php

namespace App;
 
class Page extends Authenticatable
{
    protected $table = 'pages';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content',
    ]; 
	
	
}
