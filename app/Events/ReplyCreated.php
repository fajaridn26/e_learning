<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReplyCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $reply;

    public function __construct($reply)
    {
        $this->reply = $reply->load('user');
    }

    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel('discussions.' . $this->reply->discussion->id);
    }

     public function broadcastAs(): string
    {
        return 'ReplyCreated';
    }

    public function broadcastWith(): array
    {
        return [
            'id' => $this->reply->id,
            'content' => $this->reply->content,
            'user' => [
                'id' => $this->reply->user->id,
                'name' => $this->reply->user->name,
            ],
            'created_at' => $this->reply->created_at->diffForHumans(),
        ];
    }
}

