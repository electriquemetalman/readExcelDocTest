<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\article;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArticlesImport implements ToArray, WithHeadingRow
{
    //use Importable;
    /**
     * @param Collection $collection
     */
    public function array(array $data)
    {

        foreach ($data as $article) {
            Article::create([
                'code' => $article['code'],
                'nom' => $article['nom'],
                'description' => $article['description'],
                'prix_unitaire' => $article['prix_unitaire'],
                'quantité' => $article['quantite'],
                'image' => $article['image'],
                'id_utilisateur' => $article['id_utilisateur'],
                'id_category' => $article['id_category'],
            ]);
        }
    }
}
