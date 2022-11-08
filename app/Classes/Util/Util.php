<?php

namespace app\classes\Util;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;


class Util
{
    public static function getYMDWFromDbDate($date)
    {
        $dateStr = date('Y年m月d日', strtotime($date));
        $week = array("日", "月", "火", "水", "木", "金", "土");

        $dateStr = $dateStr . '(' . $week[date('w', strtotime($date))] . ')';
        return $dateStr;
    }

    public static function dbDateToStrDate($date)
    {
        $week = array("日", "月", "火", "水", "木", "金", "土");
        $dateStr = date('m/d', strtotime($date)) . '(' . $week[date('w', strtotime($date))] . ')';

        return $dateStr;
    }
    public static function dbDateToStrDateForBirthday($date)
    {
        $dateStr = date('Y年m月d日', strtotime($date));

        return $dateStr;
    }

    public static function minuteToTime($timeNum)
    {
        $hour = (string) floor($timeNum / 60);
        if($timeNum % 60==0){
            $minute = '00';
        } else{
            $minute = (string) ($timeNum % 60);
        }

        return $hour . ':' . $minute;
    }

    public static function minuteNumToTime($time)
    {
        $hour = (string) floor($time / 60);
        $minute = (string) $time % 60;

        return $hour . '時' . $minute . '分';
    }

    public static function timeToMinute($hour, $minute)
    {
        return $hour * 60 + $minute;
    }

    public static function addDays($baseDay, $addDays)
    {

        $time = '+' . $addDays . 'day';
        return date('Y-m-d', strtotime($time, strtotime($baseDay)));
    }

    public static function dateFormat($date)
    {
        $week = array("日", "月", "火", "水", "木", "金", "土");
        $dateStr = date('m/d', strtotime($date)) . '(' . $week[date('w', strtotime($date))] . ')';

        return $dateStr;
    }

    /*
    public static function getSetting($default, $setting_name, $isInt)
    {
        $user = Auth::user();

        Log::debug(__METHOD__ . '(' . __LINE__ . ') start!');
        $setting = Setting::where('setting_name', $setting_name)->get();

        if (is_null($user)) {
            $reader = 'Non Member User';
        } else {
            $reader = $user->id;
        }

        Log::info(__FUNCTION__ . ' user(' . $reader . ') get setting ' . $setting_name . ' (' . $setting . ')');


        $settingHere = $setting;

        //設定がなかった場合
        Log::debug(__METHOD__ . '(' . __LINE__ . ') end ');
        if ($settingHere->count() == 0) {
            return $default;
        }

        if ($isInt) {
            return $settingHere->first()->setting_int;
        } else {
            return $settingHere->first()->setting_string;
        }
    }
    */

    public function getDaysList($st_date, $ed_date)
    {
        $days = [];
        for ($i = $st_date; $i <= $ed_date; $i = $this->addDays($i, 1)) {
            $days[$i] = $i;
        }

        return $days;
    }

    public function getTimes($st_time, $ed_time, $step_time)
    {
        $times = [];
        for ($time = $st_time; $time < $ed_time; $time = $time + $step_time) {
            $str_time = Util::minuteToTime($time);
            $times[$time] = $str_time;
            Log::debug(__METHOD__ . '(' . __LINE__ . ')');
        }
        return $times;
    }

    public function getTimesCount($st_time, $ed_time, $step_time)
    {   Log::debug(__METHOD__.'('.__LINE__.') starts!');
        $timesCount = ($ed_time - $st_time)/ $step_time;
        
        $timesCount = ceil($timesCount);

        Log::debug(__METHOD__.'('.__LINE__.') st_time:' . $st_time . ' ed_time:' . $ed_time . ' step_time:' . $step_time . ' $timesCount'. $timesCount);
        Log::debug(__METHOD__.'('.__LINE__.') ends!');
        return $timesCount;
    }

    public function getTimesForSP($st_time, $ed_time, $step_time){
        $times = [];
        for ($time = $st_time; $time < $ed_time; $time = $time + $step_time) {
            $hour = (string) floor($time / 60);
            $minute = (string) ($time % 60);
            $str_time = $hour .':'. $minute;
            $times[$time] = $str_time;
            Log::debug(__METHOD__ . '(' . __LINE__ . ')');
        }
        return $times;
    }
    public function getTimesNum($st_time, $ed_time, $step_time)
    {
        $timesNum = [];
        for ($time = $st_time; $time < $ed_time; $time = $time + $step_time) {
            $str_time = Util::minuteToTime($time);
            $times[$time] = $str_time;
            $timesNum[$str_time] = $time;
        }
        return $timesNum;
    }
    public static function getAge($date, $birthday)
    {
        $birthdayYear = date('Y', strtotime($birthday));
        $birthdayMonth = date('m', strtotime($birthday));
        $birthdayDay = date('d', strtotime($birthday));

        $year = date('Y', strtotime($date));
        $month = date('m', strtotime($date));
        $day = date('d', strtotime($date));

        $age =  $year - $birthdayYear - 1;

        $birth_month_year = $birthdayMonth * 100 + $birthdayDay;
        $month_year = $month * 100 + $day;

        if ($month_year >= $birth_month_year) {
            $age  = $age + 1;
        }

        return (string) $age . '歳';
    }

    public static function getEndOfTheMonth($date, $addMonth)
    {


        return date("Y-m-t", strtotime($date . (string) $addMonth . "month"));
    }

    public function saveAccessLog($user_id, $method, $message)
    {
        Log::debug(__METHOD__ . '(' . __LINE__ . ') start!');
        Log::debug(__METHOD__ . '(' . __LINE__ . ') end!');
    }


    public static function getUserId(){
        $user =Auth::user();
        if(is_null($user)){
            return 'not login user';
        } else{
            return $user->id;
        }
    }

    public static function getUnique(String $tableName){
        return 'unique:' . $tableName;
    }

    public static function getRoute($table_name, $action){
        return Util::getStringConnectTableAndAction($table_name, $action);
    }

    public static function getNowTime(){
        return date(cm::CONST_NOW);
    }

    private static function getStringConnectTableAndAction($table_name, $action){
        return $table_name .'.'. $action;
    }
}
