<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Models\Season;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index', 
        ['episodes' => $season->episodes,
        'mensagemSucesso' => session('mensagem.sucesso')
    ]);
    }

    public function update(Season $season, Request $request)
    {
        $watchedEpisodes = $request->episodes;
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            $episode->watched = in_array(
            $episode->id,
            $watchedEpisodes
            );
        });
        $season->push();

        return to_route('episodes.index', $season->id)->with('mensagem.sucesso', 'Episódios marcados como assistidos');
    }
}
