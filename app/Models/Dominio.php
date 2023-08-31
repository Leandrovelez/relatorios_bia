<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dominio extends Model
{
    use HasFactory; protected $fillable = ['nome','curso','dominio', 'aluno', 'comentario', 'nota', 'mes', 'ano'];
    protected $table = 'relatorio';

    public function dominio(){
        $query_passiveis_QBA = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota = 7 AND curso = 'QBA'
            GROUP BY mes
            ORDER BY ano asc;";

        $promoters_pos = DB::select($query_promoters_pos);

        return $promoters_pos;
    }    

}
