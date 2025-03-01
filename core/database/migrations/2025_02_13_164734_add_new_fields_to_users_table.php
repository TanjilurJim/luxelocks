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
        Schema::table('users', function (Blueprint $table) {
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('product_type')->nullable();
            $table->string('business_year')->nullable();
            $table->string('license_type')->nullable();
            $table->string('license_number')->nullable();
            $table->string('description')->nullable();
            $table->string('contact_type')->nullable();
            $table->string('contact_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'business_name',
                'business_type',
                'product_type',
                'business_year',
                'license_type',
                'license_number',
                'description',
                'contact_type',
                'contact_time'
            ]);
        });
    }
};
