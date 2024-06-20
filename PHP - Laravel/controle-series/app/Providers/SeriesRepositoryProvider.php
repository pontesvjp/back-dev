<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use App\Repositories\SeriesRepostory;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
}
