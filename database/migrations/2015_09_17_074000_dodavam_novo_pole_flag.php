<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DodavamNovoPoleFlag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agriproducts', function (Blueprint $table) {
            $table->enum('flag',['0','1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agriproducts', function (Blueprint $table) {
            $table->dropColumn('flag');
        });
    }
}
