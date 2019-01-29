<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            // $table->char('role_id',15);
            // $table->string('role_name');

            // $table->primary('role_id');

            $table->increments('id');
            $table->string('role_name');
        });

        DB::table('user_role')
        ->insert([
            ['id' => '1',  'role' => 'Common queries'],
            ['id' => '2',  'role' => 'important queries'],
            ['id' => '3',  'role' => 'immediate respond queries'],
            
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('user_role');
    }
}
