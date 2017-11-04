<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerGeneralInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_general_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')
//                ->references('id')->on('user')
//                ->ondelete('cascade')
//                ->onUpdate('cascade');
            $table->string('avatar');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('city');
            $table->string('gender');
            $table->integer('contact_no');
            $table->boolean('hidden_status')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('jobseeker_general_info');
    }
}
