<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pcmakers', function (Blueprint $table) {
            $table->text('cpu');
            $table->text('gpu');
            $table->string('memory');
            $table->string('image');
            $table->text('afurl');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pcmakers', function (Blueprint $table) {
            $table->dropColumn('cpu');
            $table->dropColumn('gpu');
            $table->dropColumn('memory');
            $table->dropColumn('image');
            $table->dropColumn('afurl');  
        });
    }
};
