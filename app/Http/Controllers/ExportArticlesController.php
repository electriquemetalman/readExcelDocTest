<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ArticlesExport;

class ExportArticlesController extends Controller
{
    //
    public function showForm()
    {
    }

    public function export()
    {
        return Excel::download(new ArticlesExport, 'articles.xlsx');
    }
}
