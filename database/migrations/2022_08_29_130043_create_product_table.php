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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable()->comment('รูป');
            $table->string('name')->nullable()->comment('ชื่อสินค้า');
            $table->string('detail')->nullable()->comment('รายละเอียด');
            $table->string('typeproduct')->nullable()->comment('ประเภท');
            $table->integer('price')->nullable()->comment('ราคา');
            $table->integer('amount')->nullable()->comment('จำนวน');
            $table->integer('create_by')->nullable()->comment('user เพิ่ม');
            $table->integer('updateed_by')->nullable()->comment('user ที่เเก้ไข');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
