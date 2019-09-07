<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('restaurant_id');      
            $table->string('name');
            $table->string('opening_time');
            $table->string('ending_time');
            $table->string('category');
            $table->string('price_range');
            $table->string('email');
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->text('descriptions');
            $table->string('is_active')->default(1);
            $table->string('is_popular')->default(0);
            $table->text('full_address');
            $table->text('country');
            $table->string('restaurent_lat');
            $table->string('restaurent_lang');
            $table->string('device_type');
            $table->text('device_token');
            $table->string('postal_code');
            $table->integer('is_delete')->default(1);
            $table->double('delivery_charge');
            $table->float('handling_charge');
            $table->integer('is_use_app')->default(0);
            $table->string('cont_p_name');
            $table->string('cont_p_email');
            $table->string('cont_P_phone');
            $table->integer('is_charge')->default(0);
            $table->string('opening_time1');
            $table->string('opening_time2');
            $table->integer('is_close')->default(0);
            $table->double('min_order_price');
            $table->enum('status', ['yes', 'no']);
            $table->softDeletes();
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
        Schema::dropIfExists('restaurants');
    }
}
