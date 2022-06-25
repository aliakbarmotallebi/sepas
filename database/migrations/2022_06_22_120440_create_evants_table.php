<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evants', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->string('slug')
                ->nullable();

            $table->longText('description');

            $table->text('image_url');

            $table->string('price')
                ->default(0); //condition(Free==0)

            $table->timestamp('schedule_at');

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('evants');
    }
};
