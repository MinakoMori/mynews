<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $quarded = array('id');
    protected $fillable = ['title','body'];
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}