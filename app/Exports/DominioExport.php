<?php

namespace App\Exports;

use App\Models\Dominio;
use Maatwebsite\Excel\Concerns\FromView;

class DominioExport implements FromView
{
    /**
    * @return \Illuminate\Support\View
    */
    public function view(): View
    {
        $dominio = new Dominio();

        $dominios =  $dominio->dominio();       

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
    }
}
