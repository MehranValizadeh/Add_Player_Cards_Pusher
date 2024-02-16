<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class golden implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $num;
    /**
     * Create a new event instance.
     */
    public function __construct($team)
    {
        $this->num = $team;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('golden'),
        ];
    }

    public function broadcastAs()
    {
        return 'golden_sport';
    }
}
