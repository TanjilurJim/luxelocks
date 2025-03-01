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
        Schema::create('quote_items', function (Blueprint $table) {
            $table->id();

            // The quote_id references the quotes table
            $table->unsignedBigInteger('quote_id');

            // If your products table has an id of type unsignedBigInteger, match that:
            $table->unsignedBigInteger('product_id');

            // If variants are optional, make it nullable
            $table->unsignedBigInteger('variant_id')->nullable();

            $table->integer('quantity')->default(1);

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('quote_id')
                  ->references('id')
                  ->on('quotes')
                  ->onDelete('cascade');

            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');

            $table->foreign('variant_id')
                  ->references('id')
                  ->on('product_variants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quote_items', function (Blueprint $table) {
            // Drop foreign keys first
            $table->dropForeign(['quote_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['variant_id']);
        });

        Schema::dropIfExists('quote_items');
    }
};
