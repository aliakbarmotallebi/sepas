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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->text('refid')
                ->nullable();

            $table->morphs('paymentable');

            $table->string('amount')
                ->default(0);

            $table->enum('type', [
                'PAYPAL',
                'ZARINPAL',
                ])->default('ZARINPAL');

            $table->string('result')
                ->nullable();

            $table->enum('status', [
                    'PENDING',
                    'REJECTED',
                    'COMPLETED',
                ])->default('PENDING');

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
        Schema::dropIfExists('payments');
    }
};
