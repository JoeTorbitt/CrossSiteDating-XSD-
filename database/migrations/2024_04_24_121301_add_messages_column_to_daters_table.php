<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessagesColumnToDatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daters', function (Blueprint $table) {
            $table->text('messages')->after('liked');
           
        });

        
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daters', function (Blueprint $table) {
            Schema::dropIfExists('dater_messages');
        });
    }
}
