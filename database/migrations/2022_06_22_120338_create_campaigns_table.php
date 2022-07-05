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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('slug')
                ->nullable();

            $table->longText('description');

            $table->text('safir_name');

            $table->text('image_url');

            $table->string('total_price');

            $table->string('extra_price')
                ->nullable()
                ->default(0);

            $table->integer('comments_count')
                ->nullable()
                ->default(0);

            $table->integer('sold_count')
                ->nullable()
                ->default(0);

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
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
        Schema::dropIfExists('campaigns');
    }
};
