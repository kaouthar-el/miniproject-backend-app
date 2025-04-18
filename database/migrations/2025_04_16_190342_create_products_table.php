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
            $table->decimal('valeur1', 4, 2); // Changé en valeur1 sans espace et type decimal
            $table->decimal('valeur2', 4, 2);
            $table->decimal('valeur3', 4, 2);
            $table->decimal('valeur4', 4, 2);
            $table->decimal('moyenne', 4, 2); // Ajout de la colonne moyenne
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
