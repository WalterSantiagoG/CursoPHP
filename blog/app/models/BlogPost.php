<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

//extends Model, para indicar que esta clase se va a comportar como un modelo de Eloquent
class BlogPost extends Model {
    protected $table = 'blog_posts';
    protected $fillable = ['title','content'];
}