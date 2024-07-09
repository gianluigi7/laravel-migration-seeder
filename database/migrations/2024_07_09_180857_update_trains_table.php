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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 20);
            $table->string('stazione_di_arrivo', 20);
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->char('codice_treno', 13);
            $table->date('orario_di_partenza');
            $table->date('orario_di_arrivo');
            $table->boolean('in_orario');
            $table->boolean('cancellato');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_di_partenza');
            $table->dropColumn('stazione_di_arrivo');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('codice_treno');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
            $table->dropColumn('in_orario')->default(false);
            $table->dropColumn('cancellato')->default(false);
        });
    }
};
