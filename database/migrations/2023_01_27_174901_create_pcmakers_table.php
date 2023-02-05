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
        if(!Schema::hasTable('pcmakers')){
        Schema::create('pcmakers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',11);
            $table->text('product');
            $table->text('pcmaker');
            $table->text('price');
            $table->text('campaign');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcmakers');
    }
};
