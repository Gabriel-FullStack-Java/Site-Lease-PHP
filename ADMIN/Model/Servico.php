
<?php

namespace App\Models; 
// Namespace deve estar na primeira linha
// app/Models/Servico.php    obs f8 aparece mais detalhes do erro no vscode


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servicos';

    protected $fillable = ['nome', 'descricao'];
}


/*
   iddo aqui seria equivalente a entidadee no java, no java temos o spring
   para esta facilitando as relações com o banco de dados

   ja no PHP temos o LARAVEL

*/