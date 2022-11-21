<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

class Division extends Model
{
    use HasFactory;

    protected $fillable =[
        
    ];

    public function templateItem(){
        return $this -> hasMany('App\Models\TemplateItem');
    }

    public function getDivision(){
        return $this->division;
    }
}
