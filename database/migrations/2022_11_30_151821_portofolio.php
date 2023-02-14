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
         Schema::create('portofolios', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->string('kategori');
            $table->string('deskripsi_pendek');
            $table->text('deskripsi_panjang');
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
        Schema::dropIfExists('portofolios');
    }
};
