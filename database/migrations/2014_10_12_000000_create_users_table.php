<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')
                ->nullable();
            $table->string('username')
                ->unique();
            $table->string('email')
                ->nullable();
            $table->string('mobile', 11)
                ->nullable();
            $table->text('bio')
                ->nullable();
            $table->text('address')
                ->nullable();
            $table->string('password');
            $table->enum('role', [
                'ADMIN',
                'USER',
                'INSTRUCTOR',
                'FELLOW',
            ])->default('USER');
            $table->rememberToken();
            $table->timestamps();
        });

        $this->initSetRoleAdminFirstUser();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    private function initSetRoleAdminFirstUser()
    {
        // init reg admin
        $user = User::create([
            'username' => 'admin',
            'email'    => 'admin@sepas.org',
            'mobile'   => '09120000000',
            'password' => '123456789',
        ]);

        $user->role = User::ADMIN_ROLE;
        $user->save();
    }
};
