<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'slug', 
        'source', 
        'excerpt',
        'content',
        'category_id',
        'photo_filename',
    ];

    // Taken from http://stackoverflow.com/questions/2955251/php-function-to-make-slug-url-string
    static public function slugify($string) {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    }

    public function category() 
    {
    	return $this->belongsTo(Category::class);
    }
}
