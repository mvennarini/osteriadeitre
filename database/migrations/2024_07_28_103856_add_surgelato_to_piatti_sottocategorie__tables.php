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
        Schema::table('piatti_sottocategorie', function (Blueprint $table) {
            $table->boolean('surgelato')->default(false)->after('descrizione_inglese');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('piatti_sottocategorie', function (Blueprint $table) {
            $table->boolean('surgelato')->default(false)->after('descrizione_inglese');
            //
        });
    }
};
