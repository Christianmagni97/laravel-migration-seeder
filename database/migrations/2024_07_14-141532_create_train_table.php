<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->integer('numero_carrozze');
            $table->date('data_di_partenza');
            $table->time('orario_di_arrivo');
            $table->boolean('in_orario');
            $table->string('codice_treno');
            $table->boolean('cancellato');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};