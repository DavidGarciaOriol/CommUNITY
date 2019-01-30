<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration{

  public function up(){
    Schema::create('communities', function(Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->text('description');
      $table->string('creator_nickname');
      $table->integer('max_users');
      $table->integer('current_users_number');
      $table->string('genre');
      $table->integer('rating');
      $table->timestamps();

    });
  }

  public function down(){
    Schema::dropIfExists('books');
  }


}


?>
