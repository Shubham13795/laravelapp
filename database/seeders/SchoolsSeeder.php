<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //to add random data in DB 
        DB::table('schools')->insert([
            'stu_name'=>Str::ucfirst(Str::random(7)),
            'stu_class'=>Str::upper(Str::random(1)),
            'school_name'=>Str::ucfirst(Str::random(5)),
            'stu_address'=>Str::ucfirst(Str::random(10))

        ]);
    }
}
