<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->decimal('price')->nullable(false);
            $table->string('images')->nullable(false);
            $table->integer('count')->nullable(false);
            $table->boolean('available');
            $table->longText('description')->nullable(false);
            $table->foreignId('publisher_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('language')->nullable(false);
            $table->string('language_level');
            $table->integer('time_min');
            $table->integer('time_max');
            $table->integer('players_count');
            $table->integer('age');
            $table->string('tesera');
            $table->string('bgg');
            $table->string('content',1500);
            $table->foreignId('section_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('discount_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('products');
    }
};
