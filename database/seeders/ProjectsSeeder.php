<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;

use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT => 'テストプロジェクト',
            cm::CONST_COMMON_CLM_NAME_ORDER =>20, 
            cm::CONST_COMMON_CLM_NAME_USER_ID =>1, 
            cm::CONST_COMMON_CLM_NAME_STATUS=> 1,
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE=> '2022-10-01',
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE=> '2022-12-31',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=> 'テストプロジェクト１のまとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=> 'テストプロジェクト１の詳細',
        ];

        DB::table(pr::CONST_TABLE_NAME_OF_PROJECT) -> insert($param);
        $param =[
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT => 'テストプロジェクト2',
            cm::CONST_COMMON_CLM_NAME_ORDER =>20, 
            cm::CONST_COMMON_CLM_NAME_USER_ID =>1, 
            cm::CONST_COMMON_CLM_NAME_STATUS=> 1,
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE=> '2022-10-01',
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE=> '2022-12-31',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=> 'テストプロジェクト2のまとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=> 'テストプロジェクト2の詳細',
        ];

        DB::table(pr::CONST_TABLE_NAME_OF_PROJECT) -> insert($param);
        $param =[
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT => 'テストプロジェクト3',
            cm::CONST_COMMON_CLM_NAME_ORDER =>20, 
            cm::CONST_COMMON_CLM_NAME_USER_ID =>1, 
            cm::CONST_COMMON_CLM_NAME_STATUS=> 1,
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE=> '2022-10-01',
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE=> '2022-12-31',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=> 'テストプロジェクト3のまとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=> 'テストプロジェクト3の詳細',
        ];

        DB::table(pr::CONST_TABLE_NAME_OF_PROJECT) -> insert($param);
    }
}
