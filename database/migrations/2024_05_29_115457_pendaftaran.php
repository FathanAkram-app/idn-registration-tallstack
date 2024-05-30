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
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
        });
        Schema::create('idn_brances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name');
        });
        Schema::create('idn_branch_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('idn_brances_id')->constrained();
            $table->foreignId('programs_id')->constrained();
            $table->integer('quota');
        });
        
        Schema::create('registered_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->string('santri_name');
            $table->boolean('gender');
            $table->foreignId('idn_branch_programs_id')->constrained();
            $table->string('proof_of_transaction');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
