<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('idn_brances')->insert([
            'branch_name' => 'IDN Jonggol Ikhwan'
        ]);
        DB::table('idn_brances')->insert([
            'branch_name' => 'IDN Jonggol Akhwat'
        ]);
        DB::table('idn_brances')->insert([
            'branch_name' => 'IDN Sentul'
        ]);
        DB::table('programs')->insert([
            'name' => 'SMP'
        ]);
        DB::table('programs')->insert([
            'name' => 'SMK TKJ'
        ]);
        DB::table('programs')->insert([
            'name' => 'SMK RPL'
        ]);
        DB::table('programs')->insert([
            'name' => 'SMK DKV'
        ]);

        
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => '1',
            'programs_id' => '1',
            'quota' => '2'
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 1,
            'programs_id' => 2,
            'quota' => 2
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 1,
            'programs_id' => 3,
            'quota' => 2
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 1,
            'programs_id' => 4,
            'quota' => 2
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 2,
            'programs_id' => 2,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 2,
            'programs_id' => 3,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 2,
            'programs_id' => 4,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 3,
            'programs_id' => 1,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 3,
            'programs_id' => 2,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 3,
            'programs_id' => 3,
            'quota' => 5
        ]);
        DB::table('idn_branch_programs')->insert([
            'idn_brances_id' => 3,
            'programs_id' => 4,
            'quota' => 5
        ]);

    }
}
