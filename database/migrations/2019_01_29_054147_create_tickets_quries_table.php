<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsQuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_quries', function (Blueprint $table) {
            $table->char('ticketquery_code',5);

            $table->string('ticketquery_desc');

            $table->primary('ticketquery_code');
            $table->timestamps();
        });


        DB::table('tickets_quries')
          ->insert([
            ['ticketquery_code' => 'L1', 'ticketquery_desc' => 'Level1'],
            ['ticketquery_code' => 'L2', 'ticketquery_desc' => 'Level2'],
            ['ticketquery_code' => 'L3', 'ticketquery_desc' => 'Level3'],
          ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets_quries');
    }
}
