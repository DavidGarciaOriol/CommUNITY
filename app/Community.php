<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model{
    //protected $fillable = ['name', 'slug', 'description', 'max_users', 'creator_nickname', 'main_genre'];
    protected $fillable = ['user_id', 'name', 'slug'. 'creator_nickname', 'description', 'max_users', 'main_genre'];


}

?>
