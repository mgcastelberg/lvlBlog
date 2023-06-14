<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        DB::table('topics')->insert(['id'=> 1, 'name'=> 'Inducción', 'slug'=> 'induccion','created_at'=> date('Y-m-d H:m:s')]);
        DB::table('topics')->insert(['id'=> 2, 'name'=> 'Frontend', 'slug'=> 'frontend','created_at'=> date('Y-m-d H:m:s')]);
        DB::table('topics')->insert(['id'=> 3, 'name'=> 'Backend', 'slug'=> 'backend','created_at'=> date('Y-m-d H:m:s')]);
        DB::table('topics')->insert(['id'=> 4, 'name'=> 'Product Design', 'slug'=> 'product-design','created_at'=> date('Y-m-d H:m:s')]);
        DB::table('topics')->insert(['id'=> 5, 'name'=> 'Apis Partners', 'slug'=> 'apis-partners','created_at'=> date('Y-m-d H:m:s')]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
