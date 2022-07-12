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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();

            $table->enum('type', ['Deposit', 'Withdraw']);
            $table->integer('amount')
                ->default(0);
            $table->string('description')
                ->nullable();
            $table->enum('status', [
                'Pending',
                'Approved', 
                'Rejected'
                ])->default('Pending');

            $table->text('message')
                ->nullable();
            
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                ->references('id')
                ->on('users');


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
        Schema::dropIfExists('user_wallets');
    }
};
