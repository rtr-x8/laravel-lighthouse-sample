<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'user_id',
    ];

    public function author() {
        return $this->belongsTo('App\User');
    }

    public function taxonomies() {
        return $this->belongsToMany('App\Taxonomy');
    }
}
