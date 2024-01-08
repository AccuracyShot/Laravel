<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{EloquentSeriesRepository, ISeriesRepository};

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        ISeriesRepository::class => EloquentSeriesRepository::class
    ];

}
