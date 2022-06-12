<?php

namespace App;
 
use Cviebrock\EloquentSluggable\Sluggable;
 
class Page 
{
    use Sluggable;
	
    protected $table = 'pages';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content',
    ]; 
	
	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
