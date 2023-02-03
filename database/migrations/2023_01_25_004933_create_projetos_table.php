<?php

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_projeto');
            $table->text('descricao')->nullable();
            $table->text('objetivo')->nullable();
            $table->date('data_criacao')->default(now());
            $table->date('data_entrega')->nullable();
            $table->boolean('situacao')->default(true); // false-inativo, true-ativo
            $table->string('capa')->nullable(); // armazena o caminho da imagem
            $table->string('palavras-chave')->nullable();
            $table->foreignId('curso_id')->constrained();
            $table->foreignId('categoria_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
};
