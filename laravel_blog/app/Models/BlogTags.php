<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
  
    protected $table="blogs_tags";
    protected $fillable=[
        "id",
        "blogs_id",
        "tag",
        "created_at",
        "updated_at",
      
    ];
}
