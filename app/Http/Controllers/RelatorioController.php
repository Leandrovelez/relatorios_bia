<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\RelatorioImport;
use App\Exports\RelatorioExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Relatorio;
use Illuminate\Support\Facades\DB;


class RelatorioController extends Controller
{
    public function index(Request $request){
        
        DB::table('relatorio')->delete();

        Excel::import(new RelatorioImport, $request->file('arquivo')->store('temp'));
        
        return Excel::download(new RelatorioExport, 'planilha-consolidada-curso.xlsx');
        //return Excel::download(new DominioExport, 'planilha-consolidada-dominio.xlsx');

    }
}
