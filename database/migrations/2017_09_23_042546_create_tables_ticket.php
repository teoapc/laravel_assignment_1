<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('user_informations', function(Blueprint $table) {
//            $table->increments('user_id');
//            $table->string('user_first_name');
//            $table->string('user_last_name');
//            $table->string('user_email');
////            $table->integer('is_admin')->default(0);
//            $table->timestamps();
//        });

        Schema::create('ticket_informations', function(Blueprint $table) {
            $table->string('user_ticket_id')->unique()->primary();
            $table->string('operating_system');
            $table->string('software_issue');
            $table->string('description');
            $table->string('status');
            $table->string('priority_level')->default("Low");
            $table->integer('escalation_level')->default(0);
//            $table->string('user_id');
            $table->timestamps();

//            $table->foreign('user_id')->references('user_id')->on('user_informations');

        });

        Schema::create('ticket_comments', function(Blueprint $table) {
            $table->integer('ticket_comment_id');
            $table->string('user_ticket_id');
            $table->text('comment');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_ticket_id')->references('user_ticket_id')->on('ticket_informations');
        });

//        Schema::create('admins', function(Blueprint $table){
//           $table->string('user_id')->primary();
//           $table->string('user_first_name');
//           $table->string('user_last_name');
//           $table->string('user_email')->unique();
//           $table->string('password');
//           $table->string('admin_level');
////           $table->boolean('is_admin');
//           $table->rememberToken();
//           $table->timestamps();
//        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_informations');
        Schema::dropIfExists('ticket_comments');
        Schema::dropIfExists('user_informations');
//        Schema::dropIfExists('admins');

    }
}
