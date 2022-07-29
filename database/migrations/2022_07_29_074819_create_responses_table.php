<?php

use App\Models\User;
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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->string('first_choice')->nullable();
            $table->string('second_choice')->nullable();
            $table->string('third_choice')->nullable();
            $table->string('fourth_choice')->nullable();
            $table->string('fifth_choice')->nullable();
            $table->string('sixth_choice')->nullable();
            $table->string('seventh_choice')->nullable();
            $table->string('eighth_choice')->nullable();
            $table->string('nineth_choice')->nullable();
            $table->string('tenth_choice')->nullable();
            $table->string('score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
};
