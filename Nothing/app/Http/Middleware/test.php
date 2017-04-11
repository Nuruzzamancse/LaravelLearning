<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$name)
    {
        $user = user::find(1);

        if($name!=$user->name){

            throw new \Exception("Your Name is not Nuruzzaman");
            

        }

        return $next($request);
    }
}
