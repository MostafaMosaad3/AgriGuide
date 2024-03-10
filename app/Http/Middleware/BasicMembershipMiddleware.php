<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BasicMembershipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user() ;
        if($user && $user->membership_level_id < 2 ){
            if($user->free_trails > 0){
                $user->DecrementFreeTrails() ;

                $response = $next($request);

                $responseData = json_decode($response->getContent(), true);
                $responseData['free_trials_remaining'] = $user->DecrementFreeTrails();

                $response->setContent(json_encode($responseData));

                return $response;
            }

            return response()->json( 'Unauthorized access. You must be Basic , Premium or Enterprise membership level to access this feature.' , 403) ;
            }
        return $next($request);
    }

}
