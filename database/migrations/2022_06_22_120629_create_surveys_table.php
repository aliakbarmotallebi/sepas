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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
                    ->references('id')
                    ->on('courses')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('fellow_id');
            $table->foreign('fellow_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->enum('status', [
                'PUBLISHED',
                'UNPUBLISHED',
                ])->default('PUBLISHED');

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
        Schema::dropIfExists('surveys');
    }
};
