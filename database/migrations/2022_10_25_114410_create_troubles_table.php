<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Classes\Const\DatabaseConst\TroubleTableConst as tr;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tr::CONST_TABLE_NAME_OF_TROUBLE, function (Blueprint $table) {
            $table->id();
            $table->foreignID(tr::CONST_CLM_NAME_OF_TROUBLE_TABLE_USER_ID);
            $table->string(tr::CONST_CLM_NAME_OF_TROUBLE_TABLE_SUMMARY);
            $table->string(tr::CONST_CLM_NAME_OF_TROUBLE_TABLE_EXPLAIN);
            $table->integer(tr::CONST_CLM_NAME_OF_TROUBLE_TABLE_IMPORTANCE);
            $table->dateTime(tr::CONST_CLM_NAME_OF_TROUBLE_TABLE_FINAL_REFERENCE)
            ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(tr::CONST_TABLE_NAME_OF_TROUBLE);
    }
};
