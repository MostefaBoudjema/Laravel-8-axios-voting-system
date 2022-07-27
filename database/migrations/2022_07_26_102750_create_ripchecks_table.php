<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRipchecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ripchecks', function (Blueprint $table) {
            $table->id();
            $table->string('rip_name')->nullable();
            $table->string('rip_number')->unique();;
            $table->string('rip_phone')->nullable();
            $table->string('rip_status');  
            $table->string('rip_user_id');  
            $table->string('rip_email')->nullable();  
            // $table->string('rip_email')->unique()->nullable();  
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ripchecks');
    }
}
