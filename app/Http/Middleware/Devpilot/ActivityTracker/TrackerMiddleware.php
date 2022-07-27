<?php

namespace App\Http\Middleware\Devpilot\ActivityTracker;


use Closure;
use Illuminate\Http\Request;
use TechiesAfrica\Devpilot\Services\ActivityTracker\TrackerService;

class TrackerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $tracker = TrackerService::tracker();

        // Ignore routes you dont`t want to track
        // $tracker->setIgnoreRoutes([
        //     "web.read_file"
        // ]);

        // Ignore middlewates you dont`t want to track
        // $tracker->setIgnoreMiddlewares(["Barryvdh\Debugbar\Middleware\DebugbarEnabled"]);

        // Set middlewares used to identify authenticated users
        // $tracker->setAuthenticatedMiddlewares(["auth" , "admin" , "verified"]);

        // Set values for authenticated user mapping based of columns in the users table
        $tracker->setUserFields(["id" => "id", "name" => "full_name", "email" => "email"]);

        // Toggle logging as necessary, default is true unless otherwise stated in your .env
        // $tracker->setShouldLog(false);

        $tracker->preRequest($request);

        $response =  $next($request);

        // TrackerService::log("pushing data");

        $tracker->postRequest($request)->push();

        return $response;
    }
}
