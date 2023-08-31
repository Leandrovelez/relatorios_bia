<?php

namespace App\Imports;

use App\Models\Relatorio;
use Maatwebsite\Excel\Concerns\ToModel;

class RelatorioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Relatorio([
            'curso' => $row[0],
            'dominio' => $row[1],
            'aluno' => $row[2],
            'comentario' => $row[3],
            'nota' => $row[4],
            'mes' => $row[5],
            'ano' => $row[6],
        ]);
    }
}
