<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarAndIntroductionAndSexToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->string('avatar')->nullable();
			$table->string('introduction')->nullable();
			$table->string('sex')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->dropColumn('avatar');
			$table->dropColumn('sex');
            $table->dropColumn('introduction');
        });
    }
}
