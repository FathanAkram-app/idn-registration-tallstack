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
        
        Schema::create('quota_idn_brances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name');
            $table->integer('tkj_quota');
            $table->integer('rpl_quota');
            $table->integer('dkv_quota');
            $table->integer('smp_quota');
        });
        Schema::create('registered_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique;
            $table->string('password');
            $table->string('santri_name');
            $table->boolean('gender');
            $table->foreignId('quota_idn_brances_id')->constrained();
            $table->string('program_idn');
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
