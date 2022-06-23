<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->string('slug')
                ->nullable();

            $table->text('description');

            $table->text('body')
                ->nullable();

            $table->text('image_url');

            $table->string('price');

            $table->text('video_url')
                ->nullable();

            $table->json('topics')
                ->nullable();

            $table->text('requirements')
                ->nullable();

            $table->string('wallet_balance')
                ->defualt(0);

            $table->integer('comments_count')
                ->defualt(0);

            $table->integer('sold_count')
                ->defualt(0);

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->enum('unit', [
                    'IRR',
                    'USD',
                ])->default('IRR'); //InnerAndExernalCourse

            $table->enum('type', [
                    'ONLINE',
                    'OFFLINE',
                ])->default('ONLINE');

            $table->enum('status', [
                    'PUBLISHED',
                    'UNPUBLISHED',
                ])->default('PUBLISHED');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
