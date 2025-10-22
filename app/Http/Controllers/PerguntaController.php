<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    // Mostra a página inicial de boas vindas ao quizz
    public function inicio()
    {
        $total_perguntas = Pergunta::count();

        return view(
            'perguntas.inicio',
            compact('total_perguntas')
        );
    }
}
