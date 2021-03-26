<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Auto;

class ApiController extends Controller
{
    public function getFirstAuto() {
        // creare un'api che ritorna la prima auto nel database.
        $firstAuto = Auto::orderBy('id', 'asc')->first();

        // dobbiamo trasformare un oggetto Model in json con la serialization

        /*
            qui mi ritorna un json, perchè il content-type nel header
            in postman è settato in application/json
        */
        // return response()->json(['1' => '1']);

        /*
            qui mi ritorna un testo html, perchè il content-type nel header
            in postman è settato in html, quindi non ritorna json
        */
        // return response('auguri');

        /*
            così trasformo l'oggetto Model in un array,
            poi in un json per dare una risposta json
        */
        // return response()->json($firstAuto->toArray());

        /*
            così il json ha lanciato da solo internamente il toJson,
            senza dover passare dall'array
        */
        return response()->json($firstAuto);
    }
}
