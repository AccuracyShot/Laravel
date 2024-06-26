<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;


use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesControllerApi extends Controller
{
    public function __construct(private SeriesRepository $seriesRepository)
    {
        
    }

    public function index(Request $request)
    {
        $query = Series::query();
        if ($request->has('nome')) {
            $query->where('nome', $request->nome);
        }

        return $query->paginate(5);

    }

    public function store(SeriesFormRequest $request)
    {

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->store('series_cover', 'public');
            $request->merge(['coverPath' => $coverPath]);
        }

        return response()->json($this->seriesRepository->add($request), 201);
    }

    public function show(int $series)
    {
        $seriesModel = Series::find($series);
        if ($seriesModel === null) {
            return response()->json(['message' => 'Série não encontrada'], 404);
        }
        return $seriesModel;
    }

    public function update(SeriesFormRequest $request, Series $series)
    {
        $series->fill($request->all());
        $series->save();

        return $series;
    }


    public function destroy(int $series)
    {
        Series::destroy($series);
        return response()->json(['message' => 'Série deletada com sucesso.'], 204);
    }

    // public function update(SeriesFormRequest $request, Series $series)
    // {
    //     $series->update($request->all());
    //     return response()->json($series, 200);
    // }


    // public function show(int $series)
    // {
    //     $series = Series::whereId($series)
    //     ->with('seasons.episodes')
    //     ->first();
    //     return $series;
    // }

}