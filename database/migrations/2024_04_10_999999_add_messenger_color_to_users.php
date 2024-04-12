<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessengerColorToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2024_04_12_185332_create_user_logins_table.php
        Schema::create('user_logins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('logger_id');
            $table->foreign('logger_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
========
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'messenger_color')) {
                $table->string('messenger_color')->nullable();
            }
>>>>>>>> f624fc138d2313d9465e14eb2fe1ac32eba927e4:database/migrations/2024_04_10_999999_add_messenger_color_to_users.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2024_04_12_185332_create_user_logins_table.php
        Schema::dropIfExists('user_logins');
    }
};
========
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('messenger_color');
        });
    }
}
>>>>>>>> f624fc138d2313d9465e14eb2fe1ac32eba927e4:database/migrations/2024_04_10_999999_add_messenger_color_to_users.php
