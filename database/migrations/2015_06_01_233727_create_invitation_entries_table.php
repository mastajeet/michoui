<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitation_entries', function(Blueprint $table)
		{
            $table->increments('id');
            $table->text('nomPrincipal');
            $table->text('plusOne');
            $table->text('nourriture');
            $table->text('typeNourriture');
            $table->smallInteger('cafe');
            $table->smallInteger('sauce');
            $table->longText('notes');
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
		Schema::drop('invitation_entries');
	}

}
