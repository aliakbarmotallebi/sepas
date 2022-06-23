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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();

            $table->string('label');

            $table->string('question');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
                    ->references('id')
                    ->on('courses')
                    ->onDelete('cascade');

            $table->enum('type', [
                    'RADIO',
                    'TEXT',
                ])->default('TEXT');

            $table->timestamps();
        });

        Schema::create('questionnaire_answers', function (Blueprint $table) {
            $table->id();

            $table->string('answer')
                ->nullable();

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('questionnair_id');
            $table->foreign('questionnair_id')
                    ->references('id')
                    ->on('questionnaires')
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
        Schema::dropIfExists('questionnaire_answers');
        Schema::dropIfExists('questionnaires');
    }
};
