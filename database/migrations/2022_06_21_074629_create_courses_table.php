<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->longText('description');

            $table->text('body')
                ->nullable();

            $table->longText('image_url');

            $table->string('price');

            $table->longText('video_url')
                ->nullable();

            $table->longText('topics')
                ->nullable();

            $table->longText('requirements')
                ->nullable();

            $table->string('wallet_balance')
                ->default(0);

            $table->integer('comments_count')
                ->default(0);

            $table->integer('sold_count')
                ->default(0);
            
            $table->integer('visit_count')
                ->default(0);

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
                    'BOTH'
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
