<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pra_kp', function (Blueprint $table) {
            $table->increments('id_pkp');
            $table->char('nim',8);
            $table->integer('dosen_id');
            $table->string('lembaga');
            $table->string('alamat');
            $table->string('pimpinan');
            $table->string('no_telp');
            $table->string('fax');
            $table->string('spek');
            $table->string('tools');
            $table->text('dokumen');
            $table->string('status_pkp');
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
        Schema::dropIfExists('pra_kp');
    }
}
