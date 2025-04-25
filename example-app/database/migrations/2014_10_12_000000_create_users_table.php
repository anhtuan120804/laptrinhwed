<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function definition()
    {
        $roles = ['admin', 'member', 'leader', 'manager'];
    
        return [
            'name' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'orders' => $this->faker->numberBetween(0, 50),
            'role' => $this->faker->randomElement($roles),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Mật khẩu mặc định
            'remember_token' => Str::random(10),
        ];
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
