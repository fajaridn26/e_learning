<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::routes(['middleware' => ['auth:sanctum']]);

Broadcast::channel('discussions.{id}', function ($user, $id) {
    return (int) $user->id > 0;
});

