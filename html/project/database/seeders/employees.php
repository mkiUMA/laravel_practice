<?php

namespace database\seeders;

use Illuminate\database\seeder;
use Illuminate\Support\Facades\DB;
use App\Models\employee;

class employees extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            'id' => 2,
            'name' => '久富湧斗',
            'birthday' => date('1999-05-06'),
            'position' => '一般社員',
        ]);
    }
}
