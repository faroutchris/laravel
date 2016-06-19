<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];
    
    protected $dates = ['published_at']; //Treat this timestamp as a Carbon instance
    
    /**
     * Mutator for published_at field in the articles table
     * $date
     */
    public function setPublishedAtAttribute ($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
