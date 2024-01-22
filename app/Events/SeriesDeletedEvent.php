<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Series;
//use Arcanedev\LogViewer\Entities\Log;
use Illuminate\Support\Facades\Log;

class SeriesDeletedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $series;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Series $series)
    {
        $this->series = $series;
        Log::info('SeriesDeletedEvent disparado para a série');
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
