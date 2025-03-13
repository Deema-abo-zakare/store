<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity'); // تحديد الكمية كعدد صحيح
        $table->decimal('price', 8, 2); // تحديد السعر كعدد عشري (8 أرقام، 2 بعد الفاصلة العشرية)
        $table->text('description'); // تحديد الوصف كنص طويل
        $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
