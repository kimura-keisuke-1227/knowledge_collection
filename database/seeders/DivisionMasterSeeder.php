<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use Illuminate\Support\Facades\DB;

class DivisionMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_KNOWLEDGE_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER => '記事ステータス',
            cm::CONST_COMMON_CLM_NAME_ORDER =>10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION_MASTERS) -> insert($param);
 
        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER => 'プロジェクトステータス',
            cm::CONST_COMMON_CLM_NAME_ORDER =>20,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION_MASTERS) -> insert($param);
        
        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER => 'タスクテータス',
            cm::CONST_COMMON_CLM_NAME_ORDER =>30,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION_MASTERS) -> insert($param);
        
        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER => '重要度',
            cm::CONST_COMMON_CLM_NAME_ORDER =>40,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION_MASTERS) -> insert($param);
        
        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER => '緊急度',
            cm::CONST_COMMON_CLM_NAME_ORDER =>40,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION_MASTERS) -> insert($param);
    }
}
