<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToCommunitiesTable extends Migration{

  public function up(){
    Schema::table('communities', function(Blueprint $table){
      $table->string('slug')->after('name')->unique();
    });
  }

  public function down(){
    Schema::table('communities', function(Blueprint $table){
      $table->dropColumn('slug');
    });
  }
}

?>
