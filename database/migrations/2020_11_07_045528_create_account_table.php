<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('account_id');
            //$table->foreignId('customer_id')->references('customer_id')->constrained('customer');
            $table->text('url');
            $table->string('login_id', 256);
            $table->string('password', 256);
            //$table->foreignId('kind_id')->constrained('kind');
            $table->text('note');
            $table->timestamp('create_date')->useCurrent();;
            $table->timestamp('update_date')->useCurrent();;
            $table->timestamp('delete_date')->useCurrent();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
