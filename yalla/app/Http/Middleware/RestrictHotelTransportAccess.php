<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\userSelections;

class RestrictHotelTransportAccess
{
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check()){
            return redirect('/login');
        }

        $eventId = session('event_id');
        if (!$eventId) {
            return redirect('matches');
        }

        $hasTicket = userSelections::where('user_id', Auth::id())
            ->where('event_id', $eventId)
            ->whereNotNull('ticket_type_id')
            ->where('ticket_quantity', '>', 0)
            ->exists();

        if (!$hasTicket) {
            return redirect('matches');
        }

        return $next($request);
    }
}
