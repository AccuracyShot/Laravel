<?php

namespace App\Http\Controllers\Api;

use App\Models\Season;
use App\Models\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeasonsControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function seasons(int $series)
    {
        $series = Series::find($series);
        if ($series === null) {
            return response()->json(['message' => 'Série não encontrada'], 404);
        }
        return $series->seasons;
    }

}
