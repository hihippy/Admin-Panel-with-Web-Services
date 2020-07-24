<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('gender', ['male', 'feMale'])->nullable();
            $table->date('dateOfBirth');
            $table->string('userProfilePhoto');
            $table->string('email')->unique();
            $table->enum('isEmailVerified', ['Yes','No'])->nullable()->default('No');
            $table->string('mobile');
            $table->enum('isMobileVerified', ['Yes','No'])->default('No');
            $table->string('password');
            $table->enum('status', ['active', 'inActive'])->default('Active');
            //$table->foreignIn('state_id')->constrained()->onDelete('cascade');
            //$table->foreignIn('city_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
