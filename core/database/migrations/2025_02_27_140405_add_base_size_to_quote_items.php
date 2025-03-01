<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('quote_items', function (Blueprint $table) {
            $table->string('base_size')->nullable()->after('variant_id'); // Adding base_size
        });
    }

    public function down()
    {
        Schema::table('quote_items', function (Blueprint $table) {
            $table->dropColumn('base_size');
        });
    }
};
