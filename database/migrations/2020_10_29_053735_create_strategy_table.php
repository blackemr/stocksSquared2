<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategy', function (Blueprint $table) {
            $table->id();
            $table->string('strat_name', 50);
            $table->string('author', 30);
            $table->string('strat_type', 20);
            $table->string('strat_tags', 140);
            $table->string('banner_image');
            $tabel->date('created_at');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategy');
    }
}
