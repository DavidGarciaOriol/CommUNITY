<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration{

  public function up(){
    Schema::create('communities', function(Blueprint $table){
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->string('name');
      $table->text('description');
      $table->string('creator_nickname');
      $table->integer('max_users');
      $table->integer('current_users_number');
      $table->string('genre');
      $table->integer('rating');
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

    });
  }

  public function down(){
    Schema::dropIfExists('books');
  }


}


?>
