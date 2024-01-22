<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Storage;
use App\Events\SeriesDeletedEvent;
use Illuminate\Support\Facades\Log;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeleteSeriesCoverListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SeriesDeletedEvent $event)
    {
        if ($event->series->cover) {
            Log::info('Arquivo da capa da série existe antes da exclusão: ' . Storage::disk('public')->exists($event->series->cover));
            Storage::disk('public')->delete($event->series->cover);
            Log::info('Arquivo da capa da série foi excluído.');
        }
    }
}
