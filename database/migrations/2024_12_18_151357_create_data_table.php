<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('student_id'); 
            $table->unsignedBigInteger('beasiswa_id'); 
            $table->enum('application_status', ['pending', 'accepted', 'rejected']); 
            $table->date('submission_date'); 
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
        Schema::dropIfExists('data');
    }
}
