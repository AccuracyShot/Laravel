<?php

namespace App\Http\Controllers\Api;

use App\Models\Episode;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class EpisodesControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function episodes(Series $series)
    {
        return $series->episodes;
    }

    public function watched(Request $request, Episode $episode)
    {
        $episode->watched = $request->watched;
        $episode->save();

        return $episode;
    }


}
