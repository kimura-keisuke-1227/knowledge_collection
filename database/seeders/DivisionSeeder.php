<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
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
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IMPORTANCE_HIGHEST,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IMPORTANCE_HIGHEST,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IMPORTANCE_HIGH,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IMPORTANCE_HIGH,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IMPORTANCE_NORMAL,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IMPORTANCE_NORMAL,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IMPORTANCE_LOW,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IMPORTANCE_LOW,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param = [
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_IMPORTANCE_LOWEST,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_IMPORTANCE_LOWEST,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
        ];
        DB::table(dv::CONST_TABLE_NAME_OF_DIVISION)->insert($param);

        $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_NOT_STARTED,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_NOT_STARTED,
            cm::CONST_COMMON_CLM_NAME_ORDER => 10,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_STARTED,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_STARTED,
            cm::CONST_COMMON_CLM_NAME_ORDER => 20,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_IN_CHECK,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_IN_CHECK,
            cm::CONST_COMMON_CLM_NAME_ORDER => 30,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_REDO,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_REDO,
            cm::CONST_COMMON_CLM_NAME_ORDER => 40,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_IN_CORRECT,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_IN_CORRECT,
            cm::CONST_COMMON_CLM_NAME_ORDER => 50,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_FINISHED,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_FINISHED,
            cm::CONST_COMMON_CLM_NAME_ORDER => 90,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
            
            $param =[
            cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
            dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_PROJECT_STATUS_DESTRUCTED,
            dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_PROJECT_STATUS_DESTRUCTED,
            cm::CONST_COMMON_CLM_NAME_ORDER => 100,
            ];
            DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);

            $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_NOT_STARTED,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_NOT_STARTED,
                cm::CONST_COMMON_CLM_NAME_ORDER => 10,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_STARTED,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_STARTED,
                cm::CONST_COMMON_CLM_NAME_ORDER => 20,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_IN_CHECK,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_IN_CHECK,
                cm::CONST_COMMON_CLM_NAME_ORDER => 30,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_REDO,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_REDO,
                cm::CONST_COMMON_CLM_NAME_ORDER => 40,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_IN_CORRECT,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_IN_CORRECT,
                cm::CONST_COMMON_CLM_NAME_ORDER => 50,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_FINISHED,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_FINISHED,
                cm::CONST_COMMON_CLM_NAME_ORDER => 90,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_TASK_STATUS_DESTRUCTED,
                dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_TASK_STATUS_DESTRUCTED,
                cm::CONST_COMMON_CLM_NAME_ORDER => 100,
                ];
                DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                
                $param =[
                    cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                    dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_URGENCY_HIGHEST,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_URGENCY_HIGHEST,
                    cm::CONST_COMMON_CLM_NAME_ORDER => 10,
                    ];
                    DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                    
                    $param =[
                    cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                    dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_URGENCY_HIGH,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_URGENCY_HIGH,
                    cm::CONST_COMMON_CLM_NAME_ORDER => 20,
                    ];
                    DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                    
                    $param =[
                    cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                    dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_URGENCY_NORMAL,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_URGENCY_NORMAL,
                    cm::CONST_COMMON_CLM_NAME_ORDER => 30,
                    ];
                    DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                    
                    $param =[
                    cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                    dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_URGENCY_LOW,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_URGENCY_LOW,
                    cm::CONST_COMMON_CLM_NAME_ORDER => 40,
                    ];
                    DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
                    
                    $param =[
                    cm::CONST_COMMON_CLM_NAME_USER_ID => 0,
                    dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE => dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE => dv::CONST_VALUE_OF_URGENCY_LOWEST,
                    dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION => dv::CONST_TEXT_OF_URGENCY_LOWEST,
                    cm::CONST_COMMON_CLM_NAME_ORDER => 50,
                    ];
                    DB::table(dv::CONST_TABLE_NAME_OF_DIVISION) -> insert($param);
    }
}
