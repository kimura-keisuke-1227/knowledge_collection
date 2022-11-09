<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\UserTableConst as us;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            us::CONST_USER_TABLE_CLM_NAME_OF_EMAIL => 'kim.ksuke@gmail.com',
            us::CONST_USER_TABLE_CLM_NAME_OF_NAME => '木村圭佑',
            us::CONST_USER_TABLE_CLM_NAME_OF_PASSWORD 
            => Hash::make('12345678'),
        ];

        DB::table(us::CONST_TABLE_NAME_OF_USER) -> insert($param);
    }
}
