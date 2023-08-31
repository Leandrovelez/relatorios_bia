<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Relatorio extends Model
{
    use HasFactory;
    protected $fillable = ['nome','curso','dominio', 'aluno', 'comentario', 'nota', 'mes', 'ano'];
    protected $table = 'relatorio';

    public function curso(){
        $query_passiveis_pos = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota = 7 AND curso = 'PÓS' OR curso = 'Pós-Graduação' AND  nota = 7
            GROUP BY mes
            ORDER BY ano asc;";

        $query_detractors_pos = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota < 7 AND curso = 'PÓS' OR curso = 'Pós-Graduação' AND  nota < 7
            GROUP BY mes
            ORDER BY ano asc";

        $query_promoters_pos = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota > 7 AND curso = 'PÓS' OR curso = 'Pós-Graduação' AND  nota > 7
            GROUP BY mes
            ORDER BY ano asc";
        
        $query_promoters_QASPS = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota > 7 AND curso = 'QASPS'
            GROUP BY mes
            ORDER BY ano asc;";
        
        $query_detractors_QASPS = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota < 7 AND curso = 'QASPS'
            GROUP BY mes
            ORDER BY ano asc;";
        
        $query_passiveis_QASPS = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota = 7 AND curso = 'QASPS'
            GROUP BY mes
            ORDER BY ano asc;";
        
        $query_promoters_QBA = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota > 7 AND curso = 'QBA'
            GROUP BY mes
            ORDER BY ano asc;";
        
        $query_detractors_QBA = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota < 7 AND curso = 'QBA'
            GROUP BY mes
            ORDER BY ano asc;";
        
        $query_passiveis_QBA = "SELECT COUNT(aluno) AS qtd_alunos, mes, curso FROM relatorio
            WHERE nota = 7 AND curso = 'QBA'
            GROUP BY mes
            ORDER BY ano asc;";

        $promoters_pos = DB::select($query_promoters_pos);
        $detractors_pos = DB::select($query_detractors_pos);
        $passiveis_pos = DB::select($query_passiveis_pos);
        
        $promoters_QASPS = DB::select($query_promoters_QASPS);
        $detractors_QASPS = DB::select($query_detractors_QASPS);
        $passiveis_QASPS = DB::select($query_passiveis_QASPS);
        
        $promoters_QBA = DB::select($query_promoters_QBA);
        $detractors_QBA = DB::select($query_detractors_QBA);
        $passiveis_QBA = DB::select($query_passiveis_QBA);

        return [
            $promoters_pos, $promoters_QASPS, $promoters_QBA,
            $detractors_pos, $detractors_QASPS, $detractors_QBA,
            $passiveis_pos, $passiveis_QASPS, $passiveis_QBA
        ];
    }

}
