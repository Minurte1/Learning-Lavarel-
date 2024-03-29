<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments('ma_bviet'); // This is the auto-incrementing primary key
            $table->string('tieude', 200);
            $table->string('ten_bhat', 100);
            $table->text('tomtat');
            $table->text('noidung')->nullable();

            $table->dateTime('ngayviet')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('hinhanh', 200)->nullable();

            $table->unsignedInteger('ma_tgia');
            $table->unsignedInteger('ma_tloai');

            $table->foreign('ma_tloai')->references('ma_tloai')->on('theloai')->onDelete('cascade');
            $table->foreign('ma_tgia')->references('ma_tgia')->on('tacgia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baiviet');
    }
};
