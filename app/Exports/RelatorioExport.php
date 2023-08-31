<?php

namespace App\Exports;

use App\Models\Relatorio;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RelatorioExport implements FromView
{

    public function view(): View
    {
        $relatorio = new Relatorio();  
        
        $relatorios = $relatorio->curso();    

        $vazio = [
            'setembro' => 0,
            'outubro' => 0,
            'novembro' => 0,
            'dezembro' => 0,
            'janeiro' => 0,
            'fevereiro' => 0,
            'março' => 0,
            'abril' => 0,
            'maio' => 0,
            'junho' => 0,
            'julho' => 0
        ];        

        $meses = [
            'setembro' => '',
            'outubro' => '',
            'novembro' => '',
            'dezembro' => '',
            'janeiro' => '',
            'fevereiro' => '',
            'março' => '',
            'abril' => '',
            'maio' => '',
            'junho' => '',
            'julho' => ''
        ];
        
        $array_promoters_pos = $relatorios[0];
        $array_promoters_QASPS = $relatorios[1];
        $array_promoters_QBA = $relatorios[2];
        
        $array_detractors_pos = $relatorios[3];
        $array_detractors_QASPS = $relatorios[4];
        $array_detractors_QBA = !empty($relatorios[5])? $relatorios[5]: $vazio;

        $array_passiveis_pos = $relatorios[6];
        $array_passiveis_QASPS = $relatorios[7];
        $array_passiveis_QBA = !empty($relatorios[8])? $relatorios[8]: $vazio;
        
        //Pos
        foreach($array_promoters_pos as $promoters){
            $promoters_pos[trim($promoters->mes)] = $promoters->qtd_alunos;
        }       
        
        foreach($array_detractors_pos as $detractors){
            $detractors_pos[trim($detractors->mes)] = $detractors->qtd_alunos;
        }
        foreach($array_passiveis_pos as $passiveis){
            $passiveis_pos[trim($passiveis->mes)] = $passiveis->qtd_alunos;
        }

        //QASPS

        foreach($array_promoters_QASPS as $promoters){
            $promoters_QASPS[trim($promoters->mes)] = $promoters->qtd_alunos;
        }

        foreach($array_detractors_QASPS as $detractors){
            $detractors_QASPS[trim($detractors->mes)] = $detractors->qtd_alunos;
        }
        
        foreach($array_passiveis_QASPS as $passiveis){
            $passiveis_QASPS[trim($passiveis->mes)] = $passiveis->qtd_alunos;
        }

        //QBA 
        
        foreach($array_promoters_QBA as $promoters){
            $promoters_QBA[trim($promoters->mes)] = $promoters->qtd_alunos;
        }
        
        foreach($array_detractors_QBA as $key => $detractors){
            if(isset($detractors->qtd_alunos)){
                $detractors_QBA[trim($detractors->mes)] = $detractors->qtd_alunos;
            } else {
                $detractors_QBA[$key] = 0;
            }
           
        }
        
        foreach($array_passiveis_QBA as $passiveis){
            $passiveis_QBA[trim($passiveis->mes)] = $passiveis->qtd_alunos;
        }     

        foreach($meses as $key => $mes){
            if(!isset($promoters_pos[$key])){
                $promoters_pos[$key] = 0;
            }
            if(!isset($promoters_QASPS[$key])){
                $promoters_QASPS[$key] = 0;
            }
            if(!isset($promoters_QBA[$key])){
                $promoters_QBA[$key] = 0;
            }
            
            if(!isset($detractors_pos[$key])){
                $detractors_pos[$key] = 0;
            }
            if(!isset($detractors_QASPS[$key])){
                $detractors_QASPS[$key] = 0;
            }
            if(!isset($detractors_QBA[$key])){
                $detractors_QBA[$key] = 0;
            }
            
            if(!isset($passiveis_pos[$key])){
                $passiveis_pos[$key] = 0;
            }
            if(!isset($passiveis_QASPS[$key])){
                $passiveis_QASPS[$key] = 0;
            }
            if(!isset($passiveis_QBA[$key])){
                $passiveis_QBA[$key] = 0;
            }
        }

        return view('exports.curso', [
            'meses' => $meses,
            'promoters_pos' => $promoters_pos,
            'promoters_QASPS' => $promoters_QASPS,
            'promoters_QBA' => $promoters_QBA,
            'detractors_pos' => $detractors_pos,
            'detractors_QASPS' => $detractors_QASPS,
            'detractors_QBA' => $detractors_QBA,
            'passiveis_pos' => $passiveis_pos,
            'passiveis_QASPS' => $passiveis_QASPS,
            'passiveis_QBA' => $passiveis_QBA,
        ]);
    }
}
