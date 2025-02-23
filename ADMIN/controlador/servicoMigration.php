
<?php

// app/Http/Controllers/ServicoController.php
namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function mostrarForm()
    {
        $servicos = Servico::all(); // Pegando todos os serviços do banco
        return view('form', compact('servicos')); // Passando os dados para a view
    }
}
