<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RicetteController extends Controller
{
    public $listaricette = [
        [
            "id" => "1",
            "nome" => "Cannolo di Ricotta",
            "desc" => "I cannoli siciliani rappresentano un'iconica specialità della cucina italiana. Questi dolci tradizionali sono apprezzati per la loro combinazione di croccantezza e cremosità.",
            "preparazione" => "Prova ad improvvisare mischiando e mescolando alcuni ingredienti, metti in forno a 2000ºC per 10 secondi, o meglio vai al link di giallo zafferano",
            "link" => "https://ricette.giallozafferano.it/Cannoli-siciliani.html",
            "urlimg" => "/media/Cannoli-siciliani_450x300.avif"
        ],
        [
            "id" => "2",
            "nome" => "Caponata di verdure",
            "desc" => "La cucina siciliana affonda le proprie radici nella tradizione povera, basata su alcuni ingredienti tipici come le melanzane, protagoniste indiscusse della caponata.",
            "preparazione" => "Prova ad improvvisare mischiando e mescolando alcuni ingredienti, metti in forno a 2000ºC per 10 secondi, o meglio vai al link di giallo zafferano",
            "link" => "https://ricette.giallozafferano.it/Caponata.html",
            "urlimg" => "/media/Caponata_450x300.avif"
        ],
        [
            "id" => "3",
            "nome" => "Arancino",
            "desc" => "Gli arancini, vanto della cucina siciliana, sono dei piccoli timballi adatti ad essere consumati sia come spuntino che come antipasto, primo piatto o piatto unico.",
            "preparazione" => "Prova ad improvvisare mischiando e mescolando alcuni ingredienti, metti in forno a 2000ºC per 10 secondi, o meglio vai al link di giallo zafferano",
            "link" => "https://ricette.giallozafferano.it/Arancini-di-riso.html",
            "urlimg" => "/media/Arancini-di-riso_450x300.avif"
        ],

    ];

    public function ricette()
    {
        return view('ricette', ['ricette' => $this->listaricette]);
    }

    public function ricette_dettaglio($id)
    {
        foreach ($this->listaricette as $ricetta) {
            if ($id == $ricetta['id']) {
                return view('ricettedettaglio', ['ricetta' => $ricetta]);
            }
        }
    }
}
