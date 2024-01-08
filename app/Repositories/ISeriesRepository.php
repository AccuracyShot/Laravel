<?php

namespace App\Repositories;

use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;

interface ISeriesRepository
{
    public function add(SeriesFormRequest $request): Series;
}