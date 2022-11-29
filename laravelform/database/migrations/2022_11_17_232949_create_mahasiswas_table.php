<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table -> id();
            $table -> string('nim',15);
            $table -> unique('nim');
            $table -> string('nama',150);
            $table -> integer('umur');
            $table -> text('alamat',255);
            $table -> string('kota',150);
            $table -> string('jurusan',50);
            $table -> string('kelas',50);
            $table -> timestamps();
            $table->softDeletes($column = 'deleted_at');
            //$table->dateTimeTz('created_at', $precision = 0)->nullable();
            //$table->dateTimeTz('updated_at', $precision = 0)->nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
