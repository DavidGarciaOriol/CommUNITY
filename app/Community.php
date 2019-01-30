<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model{
    protected $fillable = ['name', 'slug', 'description', 'max_users', 'creator_nickname', 'main_genre'];

}

?>
