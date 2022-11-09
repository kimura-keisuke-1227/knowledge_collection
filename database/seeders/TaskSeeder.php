<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;

use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>1,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト１のタスク１',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト１のタスク１まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト１のタスク１詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>1,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト１のタスク2',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト1のタスク2まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト１のタスク2詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>1,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト１のタスク3',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト１のタスク3まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト１のタスク3詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>1,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト１のタスク4',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト１のタスク4まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト１のタスク4詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>2,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト2のタスク１',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト2のタスク１まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト2のタスク１詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>2,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト2のタスク2',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト2のタスク2まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト2のタスク2詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
        $param =[
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID=>3,
            cm::CONST_COMMON_CLM_NAME_USER_ID=>1,
            cm::CONST_COMMON_CLM_NAME_TITLE=>'プロジェクト3のタスク１',
            cm::CONST_COMMON_CLM_NAME_SUMMARY=>'プロジェクト3のタスク１まとめ',
            cm::CONST_COMMON_CLM_NAME_DETAIL=>'プロジェクト3のタスク１詳細',
            cm::CONST_COMMON_CLM_NAME_STATUS=>1,
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE=>'2022-10-15',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE=>'2022-10-20',
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE=>'2022-10-25',
        ];

        DB::table(ts::CONST_TABLE_NAME_OF_TASK) -> insert($param);
    }
}
