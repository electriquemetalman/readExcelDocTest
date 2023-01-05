<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Imports\ArticlesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class ImportArticlesController extends Controller
{
    //
    public function showForm()
    {
        $article = Article::all()->toArray();
        return response()->json($article);
    }

    public function import(Request $request)
    {
        /*$path1 = $request->file('file');
        $path = storage_path('app') . '/' . $path1;
        if (!empty($path) && is_file($path)) {
            $data = Excel::import(new ArticlesImport, $path);
            return response()->json('le fichier a ete bien importer', '200');
        } else {
            return response()->json('no file fond');
        }*/
        /*$column1 = $request->column1;
        $column2 = $request->column2;
        $column3 = $request->column3;
        $column4 = $request->column4;
        $column5 = $request->column5;
        $column6 = $request->column6;
        $column7 = $request->column7;
        $column8 = $request->column8;
        $column9 = $request->column9;
        $column10 = $request->column10;

        $selectedColum = [];

        $selectedColum[] = $column1;
        $selectedColum[] = $column2;
        $selectedColum[] = $column3;
        $selectedColum[] = $column4;
        $selectedColum[] = $column5;
        $selectedColum[] = $column6;
        $selectedColum[] = $column7;
        $selectedColum[] = $column8;
        $selectedColum[] = $column9;
        $selectedColum[] = $column10;*/


        //$dataToSendInBd = (array_intersect($selectedColum, $second));
        Excel::import(new ArticlesImport, request()->file('file'));
        return response()->json('le fichier a ete bien importer', '200');
    }
}
