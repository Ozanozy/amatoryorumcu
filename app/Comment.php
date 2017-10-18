<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey = "comment_id";
    protected $fillable  = ["comment_text", "comment_title" , "makale_id",'sahip_id'];
}