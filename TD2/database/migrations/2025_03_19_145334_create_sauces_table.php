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
        Schema::create('sauces', function (Blueprint $table) {
            $table->id();
            $table->string('userId'); // Identifiant unique de l'utilisateur qui a créé la sauce
            $table->string('name'); // Nom de la sauce
            $table->string('manufacturer'); // Fabricant de la sauce
            $table->text('description'); // Description de la sauce
            $table->string('mainPepper'); // Principal ingrédient épicé
            $table->string('imageUrl'); // URL de l'image téléchargée
            $table->unsignedTinyInteger('heat'); // Nombre entre 1 et 10 décrivant la sauce
            $table->integer('likes')->default(0); // Nombre de likes
            $table->integer('dislikes')->default(0); // Nombre de dislikes
            $table->json('usersLiked')->nullable(); // Tableau des userId ayant liké
            $table->json('usersDisliked')->nullable(); // Tableau des userId ayant disliké
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sauces');
    }
};
