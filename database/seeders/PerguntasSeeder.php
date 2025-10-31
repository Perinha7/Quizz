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
            'texto' => ' Qual é o nome verdadeiro de Ace?',
            'opcao_a' => 'Portgas D. Ace',
            'opcao_b' => 'Gol D. Ace',
            'opcao_c' => 'Monkey D. Ace',
            'opcao_d' => 'Roger D. Ace',
            'resposta_correta' => 'a',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o nome da ilha natal de Nico Robin?',
            'opcao_a' => 'Ohara',
            'opcao_b' => 'Baltigo',
            'opcao_c' => 'Elbaf',
            'opcao_d' => 'Wano',
            'resposta_correta' => 'a',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual destes personagens NÃO é um Shichibukai (Ouka Shichibukai)?',
            'opcao_a' => 'Crocodile',
            'opcao_b' => 'Jinbe',
            'opcao_c' => 'Marco',
            'opcao_d' => 'Boa Hancook',
            'resposta_correta' => 'c',
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
