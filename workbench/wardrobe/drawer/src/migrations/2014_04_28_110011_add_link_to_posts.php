<?php

use Illuminate\Database\Migrations\Migration;

class AddLinkToPosts extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('posts', function($t) {
        $t->string('link_url')->nullable();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('posts', function($t)
      {
        $t->dropColumn('link_url');
      });
  }

}
