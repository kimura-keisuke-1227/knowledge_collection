<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use Illuminate\Support\Facades\DB;

class DivisionSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_IS_URL,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IS_URL_YES,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IS_URL_YES,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_IS_URL,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IS_URL_NO,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IS_URL_NO,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);
    }
}
