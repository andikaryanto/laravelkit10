<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScopeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('scopes')->insert([
            'name' => 'Admin'
        ]);
        
        DB::table('scopes')->insert([
            'name' => 'Operator'
        ]);
    }
}
