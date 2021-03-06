<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilege_user', function (Blueprint $table) {
            $table->primary(['privilege_id','user_id']);
            $table->foreignId('privilege_id');
            $table->foreignId('user_id');
            $table->timestamps();

            $table->foreign('privilege_id')
                ->references('id')
                ->on('privileges')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilege_user');
    }
}
