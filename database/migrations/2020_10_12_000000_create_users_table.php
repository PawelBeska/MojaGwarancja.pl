<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 32)->nullable(true);
            $table->string('last_name', 32)->nullable(true);

            $table->string('city', 64)->nullable(true);

            $table->string('post_code', 16)->nullable(true);

            $table->string('street', 64)->nullable(true);
            $table->string('email', 32)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);
            $table->unsignedBigInteger('group_id')->index()->default(1);
            $table->foreign('group_id')->references('id')->on('groups');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*
*
* > USERS <
* gang_id - ID gangu gracza.
* pet_id - ID zwierzęcia gracza.
* city_id - Miasto.
* balance - Waluta premium.
* alive - Żywy?
* health_points - Punkty zdrowia.
* energy_points - Punkty energii.
* strength_points - Punkty siły.
* dexterity_points - Punkty zręczności.
* vitality_points - Punkty witalności.
* intelligence_points - Punkty inteligencji.
* experience - Doświadczenie.
* experience_points - Punkty doświadczenia.
* experience_level - Poziom doświadczenia.
* cleanliness_level - Poziom czystości.
* crime_level - Poziom przestępczości.
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
