<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckNotification
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $notify_id = $request->query('notify_id');
        if ($notify_id) {
            $user = $request->user();

            $notification = $user->notifications()->find($notify_id);
            if ($notification && $notification->unread()) {
                $notification->markAsRead();
            }
        }

        return $next($request);
    }
}