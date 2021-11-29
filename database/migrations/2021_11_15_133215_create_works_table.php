<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->tinyText('small_description')->nullable();
            $table->string('client_name')->nullable();
            $table->string('arc_name')->nullable();
            $table->string('address');
            $table->float('size');
            $table->smallInteger('type')->nullable(); // 1 interior 2 external
            $table->string('tmp_folder');
            $table->smallInteger('status')->default(1); //1 active 2 disabled
            $table->smallInteger('view_count')->default(0);
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
        Schema::dropIfExists('works');
    }
}