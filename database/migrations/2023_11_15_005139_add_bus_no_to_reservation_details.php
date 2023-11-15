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
        Schema::table('reservation_details', function (Blueprint $table) {
            $table->string('bus_no')->after(column:'destination'); // Change 'some_existing_column' to the column after which you want to add 'bus_no'.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservation_details', function (Blueprint $table) {
            $table->dropColumn('bus_no');

        });
    }
};
