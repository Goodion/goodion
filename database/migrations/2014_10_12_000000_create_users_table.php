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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('phone')->nullable();
            $table->integer('amount_of_purchases')->default(0);
            $table->integer('discount')->default(0);
            $table->string('city')->nullable();
            $table->string('house')->nullable();
            $table->string('flat')->nullable();
            $table->integer('privileges')->default(0);
        });

        DB::table('users')->insert([
            'name' => 'Администратор',
            'email' => config('config.admin_email'),
            'password' => config('config.admin_password'),
        ]);
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
