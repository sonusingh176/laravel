<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       DB::table("users")
            ->insert([
                "email" =>"sonusingh82601@gmail.com",
                "name" =>"sonu singh",
                "password" =>bcrypt("123456789"),

            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table("users")->where("email", "=" , "sonusingh82601@gmail.com")->delete();
    }
};
