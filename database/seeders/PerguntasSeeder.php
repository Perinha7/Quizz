<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual é a capital da França?',
            'opcao_a' => 'Berlim',
            'opcao_b' => 'Madrid',
            'opcao_c' => 'Paris',
            'opcao_d' => 'Lisboa',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o maior planeta do nosso sistema solar?',
            'opcao_a' => 'Terra',
            'opcao_b' => 'Júpiter',
            'opcao_c' => 'Saturno',
            'opcao_d' => 'Marte',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem escreveu "Dom Quixote"?',
            'opcao_a' => 'Miguel de Cervantes',
            'opcao_b' => 'Gabriel García Márquez',
            'opcao_c' => 'Pablo Neruda',
            'opcao_d' => 'Jorge Luis Borges',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é a fórmula química da água?',
            'opcao_a' => 'CO2',
            'opcao_b' => 'H2O',
            'opcao_c' => 'O2',
            'opcao_d' => 'NaCl',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que ano o homem pisou na Lua pela primeira vez?',
            'opcao_a' => '1965',
            'opcao_b' => '1969',
            'opcao_c' => '1972',
            'opcao_d' => '1959',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
